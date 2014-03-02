<?php
namespace Common\Services;

use Think\Model;

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
		$list = S('settings');
		if(empty($list))
		{
			$settings = $this->getService()->select();
			$list = array();
			foreach ($settings as $value)
			{
				$list[$value['name']] = $value['value'];
			}
			if(!APP_DEBUG)
			{
				S('settings',$list);
			}
		}
		return $list;
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
		if (is_array($data))
		{
			//判断是否存在，如果存在，则更新
			$find = $this->setSetting()->getByName($data['name']);
			if (!empty($find))
			{
				//update
				return $this->setSetting()->where(array('name' => $data['name']))->setField('value', $data['value']);
			}
			else
			{
				//insert
				return $this->setSetting()->create($data)->add();
			}
		}
		else
		{
			return false;
		}
	}
} 