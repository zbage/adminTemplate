<?php
namespace Admin\Services;

use Think\Model;
use Think\Page;

/**
 * 配置的业务类
 * Class Settings
 * @package Common\Services
 */
class Settings
{
	/**
	 * 获取操作实例
	 * @return \Model
	 */
	private function getService()
	{
		$service = M('Settings');
		return $service;
	}

	/**
	 * 获取全部配置
	 * @return array
	 */
	public function getSettings()
	{
		$count = $this->getService()->count();
		$page = new Page($count, 10);
		$list = $this->getService()->limit($page->firstRow . ',' . $page->listRows)->select();
		$data = array('list' => $list, 'page' => $page->show());
		return $data;
	}

	/*
	 * 获取配置
	 */
	public function getSetting($name = '')
	{
		if (!empty($name))
		{
			$data = $this->getService()->field('value')->getByName($name);
			return $data['value'];
		}
	}

	/**
	 * 设置配置
	 * @param array $data
	 * @return bool
	 */
	public function setSetting($data = array())
	{
		$this->getService()->getByName($data['name']);
		$this->getService()->value = $data['value'];
		return $this->getService()->save();
	}

	public function insertSettings($data = array())
	{
		$this->getService()->create($data);
		return $this->getService()->add();
	}
} 