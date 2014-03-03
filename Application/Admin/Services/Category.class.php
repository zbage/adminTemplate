<?php
namespace Admin\Services;

use Think\Log;
use Think\Model;
use Think\Page;

/**
 * 栏目的业务类
 * Class Settings
 * @package Common\Services
 */
class Category
{
	/**
	 * 获取操作实例
	 * @return \Model
	 */
	private function getService()
	{
		$service = M('Category');
		return $service;
	}

	/**
	 * 获取全部栏目
	 * @return array
	 */
	public function getCategorys()
	{
		$count = $this->getService()->count();
		$page = new Page($count, 10);
		$list = $this->getService()->limit($page->firstRow . ',' . $page->listRows)->select();
		$data = array('list' => $list, 'page' => $page->show());
		return $data;
	}


	/**
	 * 设置栏目
	 * @param array $data
	 * @return bool
	 */
	public function setCategory($data = array())
	{
		$this->getService()->create($data);
		$result = $this->getService()->where(array('id'=>$data['id']))->setField($data['name'],$data['value']);
		return $result;
	}

	/**
	 * 添加栏目
	 * @param array $data
	 * @return mixed
	 */
	public function insertCategory($data = array())
	{
		$this->getService()->create($data);
		return $this->getService()->add();
	}

	/**
	 * 删除栏目
	 * @param string $id
	 * @return mixed
	 */
	public function deleteCategory($id = '')
	{
		$id = substr($id,0,-1);
		return $this->getService()->delete($id);
	}
} 