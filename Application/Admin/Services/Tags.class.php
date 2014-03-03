<?php
namespace Admin\Services;
use Think\Model;
use Think\Page;

/**
 * 标签的业务类
 * Class Settings
 * @package Common\Services
 */
class Tags
{
	/**
	 * 获取操作实例
	 * @return \Model
	 */
	private function getService()
	{
		$service = M('Tags');
		return $service;
	}

	/**
	 * 列表
	 * @return array
	 */
	public function getTags()
	{
		$count = $this->getService()->count();
		$page = new Page($count, 10);
		$list = $this->getService()->limit($page->firstRow . ',' . $page->listRows)->select();
		$data = array('list' => $list, 'page' => $page->show());
		return $data;
	}


	/**
	 * 更新
	 * @param array $data
	 * @return bool
	 */
	public function setTags($data = array())
	{
		$this->getService()->create($data);
		$result = $this->getService()->where(array('id'=>$data['id']))->setField($data['name'],$data['value']);
		return $result;
	}

	/**
	 * 添加
	 * @param array $data
	 * @return mixed
	 */
	public function insert($data = array())
	{
		$this->getService()->create($data);
		return $this->getService()->add();
	}

	/**
	 * 删除
	 * @param string $id
	 * @return mixed
	 */
	public function delete($id = '')
	{
		$id = substr($id,0,-1);
		return $this->getService()->delete($id);
	}
} 