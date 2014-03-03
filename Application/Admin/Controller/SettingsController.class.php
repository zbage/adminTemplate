<?php
/**
 * Time: 14-3-2 下午6:50
 */
namespace Admin\Controller;

use Admin\Services\Settings;

class SettingsController extends IndexController
{
	public function index()
	{
		$this->display();
	}

	public function ajax()
	{
		$service = new Settings();
		$data = $service->getSettings();
		$this->assign('page', $data['page']);
		$this->assign('list', $data['list']);
		$this->display();
	}

	public function save()
	{
		$data['name'] = I('name');
		$data['value'] = I('value');
		$service = new Settings();
		if ($service->setSetting($data))
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
		$service = new Settings();
		if ($service->insertSettings($_POST))
		{
			$this->success('/admin/settings/index');
		}else{
			$this->error('内部错误!','/admin/settings');
		}
	}
} 