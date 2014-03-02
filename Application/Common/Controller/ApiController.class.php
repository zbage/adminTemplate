<?php
namespace Common\Controller;

use Think\Controller;

class ApiController extends Controller
{
	protected $_settings;

	public function _initialize()
	{
		header('Content-Type:text/html;charset=utf-8');
		//加载缓存
	}
} 