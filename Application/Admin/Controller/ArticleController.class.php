<?php
/**
 * Time: 14-3-2 下午10:02
 */
namespace Admin\Controller;

use Admin\Services\Article;

class ArticleController extends IndexController
{
	public function index()
	{
		$this->display();
	}

	public function ajax()
	{
		$service = new Article();
		$data = $service->get();
		$this->assign('page', $data['page']);
		$this->assign('list', $data['list']);
		$this->display();
	}

	public function add()
	{
		$category = M('Category');
		$list = $category->select();
		$this->assign('category',$list);
		$tags = M('Tags');
		$list = $tags->select();
		$this->assign('tags',$list);
		$this->display();
	}
	public function save()
	{
		$data['name'] = I('name');
		$data['value'] = I('value');
		$data['id'] = I('id');
		$service = new Article();
		if ($service->set($data))
		{
			$this->ajaxReturn('', '', 1);
		}
		else
		{
			$this->ajaxReturn('', '', 0);
		}
	}

	public function insert()
	{
		$service = new Article();
		if ($service->insert($_POST))
		{
			$this->success('/admin/article');
		}else{
			$this->error('内部错误!','/admin/article');
		}
	}

	public function delete($id = '')
	{
		$id = urldecode($id);
		$service = new Article();
		if($service->delete($id)){
			$log = new Log();
			$log->write($service->getLastSql());
			$this->ajaxReturn('','',1);
		}else{
			$this->ajaxReturn('','',0);
		}
	}
} 