<?php
namespace Common\Controller;

use Common\Services\Settings;
use Think\Controller;
use Think\Verify;

class ApiController extends Controller
{
	public $_settings;

	protected function _initialize()
	{
		header('Content-Type:text/html;charset=utf-8');
		//加载缓存
		$settings = new Settings();
		$this->_settings = $settings->getSettings();
	}

	/**
	 * 生成验证码
	 */
	protected function getVerify()
	{
		$verify = new Verify();
		$verify->entry();
	}

	/**
	 * 检测验证码
	 * @param string $code
	 * @return bool
	 */
	protected function checkVerify($code = '')
	{
		$verify = new Verify();
		return $verify->check($code);
	}
} 