<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/23
 * Time: 21:39
 */

namespace zander84\modernadmin\helpers\wechat;

use yii\httpclient\Client;
use zander84\modernadmin\helpers\wechat\lib\paydata\WxPayJsApiPay;
use zander84\modernadmin\helpers\wechat\lib\paydata\WxPayNotifyResults;
use zander84\modernadmin\helpers\wechat\lib\paydata\WxPayOrderQuery;
use zander84\modernadmin\helpers\wechat\lib\paydata\WxPayUnifiedOrder;
use zander84\modernadmin\helpers\wechat\lib\WxPayApi;
use zander84\modernadmin\helpers\wechat\lib\WxPayException;
use zander84\modernadmin\helpers\wechat\lib\WxPayNotify;
use Yii;

class MiniProgram
{

    public $appId;
    public $secret;
    public $mchId;
    public $key;
    public $infomation;

    /**
     * @var WxPayConfig|null
     */
    public static $config = null;

    public function getConfig ()
    {
        if (!self::$config) {
            self::$config = new WxPayConfig;
            self::$config->appId = $this->appId;
            self::$config->appSecret = $this->secret;
            self::$config->mchId = $this->mchId;
            self::$config->key = $this->key;
        }

        return self::$config;
    }

    //小程序登入
    //______________________________________________________________________
    public function login ($jscode)
    {
        $url = 'https://api.weixin.qq.com/sns/jscode2session';
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl($url)
            ->setData([
                'appid' => $this->appId,
                'secret' => $this->secret,
                'grant_type' => 'authorization_code',
                'js_code' => $jscode,
            ])
            ->send();

        if ($response->isOk) {
            $data = $response->data;
            if ($data && isset($data['openid'])) {
                return $response->data;
            }
        }

        return false;
    }


    public function getUnifiedOrder ()
    {
        return new WxPayUnifiedOrder();
    }
    //小程序下单
    //______________________________________________________________________
    public function unifiedOrder ($input)
    {
        //$input = new WxPayUnifiedOrder();
        //$input->SetBody("test");
        //$input->SetAttach("test");
        //$input->SetOut_trade_no("sdkphp".date("YmdHis"));
        //$input->SetTotal_fee("1");
        //$input->SetTime_start(date("YmdHis"));
        //$input->SetTime_expire(date("YmdHis", time() + 3600*2));
        //$input->SetGoods_tag("test");
        //$input->SetNotify_url("http://paysdk.weixin.qq.com/notify.php");
        //$input->SetTrade_type("JSAPI");
        //$input->SetOpenid($openId);

        $UnifiedOrderResult = WxPayApi::unifiedOrder($this->getConfig(), $input);
        if (!array_key_exists("appid", $UnifiedOrderResult)
            || !array_key_exists("prepay_id", $UnifiedOrderResult)
            || $UnifiedOrderResult['prepay_id'] == "") {
            return false;
        }
        $jsapi = new WxPayJsApiPay();
        $jsapi->SetAppid($UnifiedOrderResult["appid"]);
        $timeStamp = time();
        $jsapi->SetTimeStamp("$timeStamp");
        $jsapi->SetNonceStr(WxPayApi::getNonceStr());
        $jsapi->SetPackage("prepay_id=" . $UnifiedOrderResult['prepay_id']);

        $jsapi->SetPaySign($jsapi->MakeSign($this->getConfig()));
        //$parameters = json_encode($jsapi->GetValues());

        return $jsapi->GetValues();
    }


    //订单通知
    //______________________________________________________________________
    public function notify (\Closure $callback)
    {
        $notify = new WxPayNotify();
        $notify->Handle($callback, $this->getConfig(), true);
    }

    //订单查询
    //______________________________________________________________________
    public function query ($out_trade_no)
    {
        try {
            $input = new WxPayOrderQuery();
            $input->SetOut_trade_no($out_trade_no);
            $data = WxPayApi::orderQuery($this->getConfig(), $input);

            if (!array_key_exists("return_code", $data)
                || (array_key_exists("return_code", $data) && $data['return_code'] != "SUCCESS")) {
                //TODO失败,不是支付成功的通知
                //如果有需要可以做失败时候的一些清理处理，并且做一些监控
                $msg = "异常异常";
                return false;
            }
            if (!array_key_exists("trade_state", $data)) {
                $msg = "输入参数不正确";
                return false;
            }
            return $data;
        } catch (Exception $e) {
            return false;
        }
    }


    public function getAccessToken ($key,$cnt=0)
    {
        if($cnt == 5){
            return false;
        }

        $cache = Yii::$app->cache;
        $val = $cache->get($key);
        if ($val) {
            return $val;
        } else {
            $client = new Client();
            $url = 'https://api.weixin.qq.com/cgi-bin/token';
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($url)
                ->setData([
                    'appid' => $this->appId,
                    'secret' => $this->secret,
                    'grant_type' => 'client_credential',
                ])
                ->send();

            if ($response->isOk) {
                $data = $response->data;
                if ($data && isset($data['access_token']) && isset($data['expires_in']) && $data['expires_in'] > 200) {
                    $cache->set($key, $data['access_token'], $data['expires_in'] - 100);
                    return $data['access_token'];
                }
            }

        }
        $cnt++;
        return $this->getAccessToken($key,$cnt);
    }

    //https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/template-message/templateMessage.send.html
    //______________________________________________________________________
    public function pushMsg($accessToken,$touser,$templateId,$formId,$data,$page='')
    {
        $content = json_encode([
            'appid' => $this->appId,
            'secret' => $this->secret,
            'grant_type' => 'client_credential',
            'access_token' => $accessToken,
            'touser' => $touser,
            'template_id' => $templateId,
            'page' => $page,
            'form_id' => $formId,
            'data' => $data,
        ],JSON_UNESCAPED_UNICODE);

        $url = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token='.$accessToken;
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('POST')
            ->setUrl($url)
            ->setHeaders(['Content-type'=>'application/json;charset=UTF-8'])
            ->setContent($content)
            ->send();
        if ($response->isOk) {
            $data = $response->data;
            if ($data && isset($data['errcode']) && $data['errcode'] ==0) {
                return true;
            }
        }

        return false;
    }

}
