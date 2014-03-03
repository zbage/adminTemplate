<?php
/**
 * Time: 14-3-2 下午10:02
 */
namespace Admin\Controller;

use Admin\Services\Tags;

class TagsController extends IndexController
{
	public function index()
	{
		$this->display();
	}

	public function ajax()
	{
		$service = new Tags();
		$data = $service->getTags();
		$this->assign('page', $data['page']);
		$this->assign('list', $data['list']);
		$this->display();
	}

	public function save()
	{
		$data['name'] = I('name');
		$data['value'] = I('value');
		$data['id'] = I('id');
		$service = new Tags();
		if ($service->setTags($data))
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
		$service = new Tags();
		if ($service->insert($_POST))
		{
			$this->success('/admin/tags');
		}else{
			$this->error('内部错误!','/admin/tags');
		}
	}

	public function delete($id = '')
	{
		$service = new Tags();
		if($service->delete($id)){
			$this->ajaxReturn('','',1);
		}else{
			$this->ajaxReturn('','',0);
		}
	}
} 