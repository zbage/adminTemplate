<?php
/**
 * Time: 14-3-2 下午10:02
 */
namespace Admin\Controller;

use Admin\Services\Category;

class CategoryController extends IndexController
{
	public function index()
	{
		$this->display();
	}

	public function ajax()
	{
		$service = new Category();
		$data = $service->getCategorys();
		$this->assign('page', $data['page']);
		$this->assign('list', $data['list']);
		$this->display();
	}

	public function save()
	{
		$data['name'] = I('name');
		$data['value'] = I('value');
		$data['id'] = I('id');
		$service = new Category();
		if ($service->setCategory($data))
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
		$service = new Category();
		if ($service->insertCategory($_POST))
		{
			$this->success('/admin/category');
		}else{
			$this->error('内部错误!','/admin/category');
		}
	}

	public function delete($id = '')
	{
		$service = new Category();
		if($service->deleteCategory($id)){
			$this->ajaxReturn('','',1);
		}else{
			$this->ajaxReturn('','',0);
		}
	}
} 