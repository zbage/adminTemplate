<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Common\Controller\ApiController;

use Home\Services\Article;

class IndexController extends ApiController
{
	public function index()
	{
		$article = new Article();
		$data = $article->getList();

		$this->assign('list',$data['list']);
		$this->assign('page',$data['page']);

		$this->display();
	}
}