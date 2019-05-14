<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/23
 * Time: 21:39
 */

namespace zander84\modernadmin\helpers\wechat;
use yii\httpclient\Client;
use zander84\modernadmin\helpers\wechat\lib\paydata\WxPayUnifiedOrder;
use zander84\modernadmin\helpers\wechat\lib\WxPayApi;
use zander84\modernadmin\helpers\wechat\lib\WxPayException;

class MiniProgram
{

    public $appId;
    public $secret;
    public $mchId;
    public $key;

    /**
     *@var WxPayConfig|null 
     */
    public static $config = null;

    public function getConfig()
    {
        if(!self::$config){
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
    public function login($jscode)
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
            if($data && isset($data['openid'])){
                return $response->data;
            }
        }
        
        return false;
    }



    public function getUnifiedOrder()
    {
        return new WxPayUnifiedOrder();
    }
    //小程序下单
    //______________________________________________________________________
    public function unifiedOrder($input)
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

        $UnifiedOrderResult =  WxPayApi::unifiedOrder($this->getConfig(), $input);
        if(!array_key_exists("appid", $UnifiedOrderResult)
            || !array_key_exists("prepay_id", $UnifiedOrderResult)
            || $UnifiedOrderResult['prepay_id'] == "")
        {
            return false;
        }

        return $UnifiedOrderResult;
    }
}