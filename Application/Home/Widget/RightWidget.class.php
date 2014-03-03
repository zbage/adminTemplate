<?php
/**
 * Time: 14-3-3 下午9:59
 */
namespace Home\Widget;

use Common\Controller\ApiController;
use Common\Services\Category;

class RightWidget extends ApiController
{
	public function right()
	{
		$category = new Category();
		$category_list = $category->getCategorys();
		$this->category = $category_list;
		$tags = M('Tags');
		$tags_list = $tags->select();
		$this->tags = $tags_list;
		$this->display('Widget:right');
	}
} 