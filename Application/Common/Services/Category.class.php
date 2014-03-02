<?php
/**
 * Time: 14-3-2 下午5:07
 */
namespace Common\Services;

/**
 * 分类业务类
 * Class Category
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
	 * 获取分类列表
	 * @return array
	 */
	public function getCategorys()
	{
		$list = S('categorys');
		if (empty($list))
		{
			$list = $this->getService()->where(array('status' => 1))->order('rank asc')->select();
			if (!APP_DEBUG)
			{
				S('categorys', $list);
			}
		}
		return $list;
	}
}