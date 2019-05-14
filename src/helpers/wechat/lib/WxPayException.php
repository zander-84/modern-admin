<?php
/**
 * 
 * 微信支付API异常类
 * @author widyhu
 *
 */
namespace zander84\modernadmin\helpers\wechat\lib;

class WxPayException extends \Exception {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
