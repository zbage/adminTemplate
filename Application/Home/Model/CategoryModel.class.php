<?php
/**
 * Time: 14-3-2 下午4:27
 */
namespace Common\Controller;

use Think\Model;

class CategoryModel extends Model
{
	protected $_auto = array(
		array('alias', 'getAlias', 1, 'callback'),
	);

	/**
	 * 生成文章别名
	 * @return bool|mixed|string
	 */
	public function getAlias()
	{
		$alias = I('alias');
		if (empty($alias))
		{
			$alias = date('Y-m-d-H-i-s', time());
		}
		return $alias;
	}
}