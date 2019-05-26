<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2019-05-26
 * Time: 12:38
 */

namespace zander84\modernadmin\helpers\ali;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use Yii;

class Sms
{

    public $length = 6;
    public $accessKeyId;
    public $accessKeySecret;
    public $signName;
    public $templateCode;
    public $expire = 5;
    public $errormsg = '';
    public $smsPrefix = 'sms_prefix';


    public function generateCode ()
    {
        $code = '';
        $nums = [1, 2, 3, 5, 6, 7, 8, 9];
        for ($i = 0; $i < $this->length; $i++) {
            $code .= $nums[rand(0, 7)];
        }
        return $code;
    }

    public function saveCode ($phone, $code)
    {
        $cache = Yii::$app->cache;
        $prefix = Yii::$app->params['redis_key'][$this->smsPrefix];
        $limit = $this->expire;
        return $cache->set($prefix . $phone, $code, 60 * $limit);
    }

    public function validateCode ($phone, $code)
    {
        $cache = Yii::$app->cache;
        $prefix = Yii::$app->params['redis_key'][$this->smsPrefix];
        $reids_code = $cache->get($prefix . $phone);
        return $reids_code == $code;
    }

    //0 成功 1客户空间错误 2服务商错误 3限流 4无效号码
    //______________________________________________________________________
    public function sendSms ($phone)
    {
        $params = [];
        $code = $this->generateCode();
        AlibabaCloud::accessKeyClient($this->accessKeyId, $this->accessKeySecret)
            ->regionId('cn-hangzhou')// replace regionId as you need
            ->asDefaultClient();
        // fixme 必填: 短信接收号码
        $params["RegionId"] = 'cn-hangzhou';
        $params["PhoneNumbers"] = $phone;

        // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $params["SignName"] = $this->signName;

        // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $params["TemplateCode"] = $this->templateCode;

        // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
        $params['TemplateParam'] = Array(
            "code" => $code,
        );
        // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
        if (!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }

        try {
            $content = AlibabaCloud::rpc()
                ->product('Dysmsapi')
                ->scheme('https')// https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->options([
                    'query' => $params,
                ])
                ->request();
            $data = $content->toArray();

            if (isset($content['Code']) && $content['Code'] == 'OK') {
                $bizid = isset($content['BizId']) ? $content['BizId'] : '';
                if ($this->saveCode($phone, $code)) {
                    return ['code' => 0, 'data' => $bizid, 'phone' => $phone, 'smsCode' => $code];
                } else {
                    return ['code' => 1, 'data' => '系统错误 redis保存失败', 'phone' => $phone, 'smsCode' => $code];
                }
            } else {
                $msg = isset($content['Message']) ? $content['Message'] : '';
                if (isset($content['Code']) && $content['Code'] == 'isv.BUSINESS_LIMIT_CONTROL') {
                    return ['code' => 3, 'data' => 'BUSINESS_LIMIT_CONTROL ' . $msg, 'phone' => $phone, 'smsCode' => $code];
                } elseif (isset($content['Code']) && $content['Code'] == 'isv.MOBILE_NUMBER_ILLEGAL') {
                    return ['code' => 4, 'data' => 'MOBILE_NUMBER_ILLEGAL' . $msg, 'phone' => $phone, 'smsCode' => $code];
                }else{
                    return ['code' => 100, 'data' => '未知错误' . $msg, 'phone' => $phone, 'smsCode' => $code];
                }
            }
        } catch (ClientException $e) {
            return ['code' => 1, 'data' => 'ClientException error ' . $e->getErrorMessage(), 'phone' => $phone, 'smsCode' => $code];
        } catch (ServerException $e) {
            return ['code' => 2, 'data' => 'ServerException error ' . $e->getErrorMessage(), 'phone' => $phone, 'smsCode' => $code];
        }

    }
}