<?php
namespace Admin\Services;

use Home\Model\ArticleModel;
use Think\Model;
use Think\Page;

/**
 * 文章业务类
 * Class Settings
 * @package Common\Services
 */
class Article
{
	/**
	 * 获取操作实例
	 * @return \Model
	 */
	private function getService()
	{
		$service = new ArticleModel();
		return $service;
	}

	/**
	 * 列表
	 * @return array
	 */
	public function get()
	{
		$count = $this->getService()->count();
		$page = new Page($count, 10);
		$list = $this->getService()->limit($page->firstRow . ',' . $page->listRows)->select();
		$data = array('list' => $list, 'page' => $page->show());
		return $data;
	}


	/**
	 * 设置
	 * @param array $data
	 * @return bool
	 */
	public function set($data = array())
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
		$ins = $this->getService()->create($data);
		$id = $this->getService()->add($ins);
		if($id > 0){
			//处理标签
			if(is_array($_POST['tags'])){
				$tags =M('ArticleTags');
				foreach($_POST['tags'] as $value)
				{
					$tags->article_id = $id;
					$tags->tags_id = $value;
					$tags->add();
				}
			}
			$content = M('Content');
			$content->article_id = $id;
			$content->content = $data['content'];
			if($content->add())
				return true;
		}
		return false;
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