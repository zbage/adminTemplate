<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Common\Controller\ApiController;

class IndexController extends ApiController
{
	public function index()
	{
		S('time',time());
	}
}