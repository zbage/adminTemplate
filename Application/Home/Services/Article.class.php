<?php
/**
 * Time: 14-3-2 下午11:39
 */

namespace Home\Services;


use Home\Model\ArticleModel;
use Think\Page;
class Article {
	private $service;
	function __construct()
	{
		if(!$this->service instanceof self)
		{
			$this->service = new ArticleModel();
		}
	}
	public function getList($category_id = 0)
	{

		if($category_id >0)
		{
			$list = S('category-id-'.$category_id);
			if(empty($list)){
				$count = $this->service->where(array('category_id'=>$category_id))->count();
				$page = new Page($count,10);
				$list = $this->service->where(array('cagegory_id'=>$category_id))->order('rank desc,timestamp desc')->limit($page->firstRow.','.$page->listRows)->select();
				if(APP_DEBUG){
					S('category-id-'.$category_id,$list);
				}
			}
			$data = array(
				'list'=>$list,
				'page'=>$page->show()
			);
		}
		else{
			$list = S('articles');
			if(empty($list)){
				$count = $this->service->count();
				$page = new Page($count,10);
				$list = $this->service->order('rank desc,timestamp desc')->limit($page->firstRow.','.$page->listRows)->select();
				if(APP_DEBUG){
					S('article',$list);
				}
			}
			$data = array(
				'list'=>$list,
				'page'=>$page->show()
			);
		}
		return $data;
	}

} 