<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Common\Controller\ApiController;
use Common\Services\Category;

class IndexController extends ApiController
{
	public function index()
	{
		$category = new Category();
		$this->assign('category', $category->getCategorys());
		$this->display();
	}
}