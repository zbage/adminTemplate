<?php
/**
 * Time: 14-3-2 下午4:20
 */
namespace Home\Model;

use Think\Model;

class ArticleModel extends Model
{
	protected $_validate = array(
		array('title', 'require', '标题不能为空!'),
		array('category_id', 'require', '请选择分类!')
	);

	protected $_auto = array(
		array('alias', 'getAlias', 1, 'callback'),
		array('description', 'getDescription', 3, 'callback'),
		array('timestamp', 'time', 1, 'function'),
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

	/**
	 * 生成文章简介
	 * @return mixed|string
	 */
	public function getDescription()
	{
		$description = I('description');
		if (empty($description))
		{
			$content = htmlspecialchars_decode(I('content'));
			$description = cn_substr(strip_tags($content), 0, 128);
		}
		return $description;
	}

	/**
	 * 获取文章
	 * @param string $alias
	 * @return bool
	 */
	public function getArticle($alias = '')
	{
		$data = $this->getByAlias($alias);
		if (!empty($data))
		{
			//查询附表
			$content = M('Content');
			$tmp = $content->field('content')->getByArticleId($data['id']);
			$data['content'] = $tmp['content'];
			return $data;
		}
		else
		{
			return false;
		}
	}

	public function alias2id($alias = '')
	{
		$data = $this->field('id')->getByAlias($alias);
		if(is_array($data)){
			return $data['id'];
		}else{
			return false;
		}
	}

	/**
	 * 赞
	 * @param int $id
	 * @return bool
	 */
	public function praise($id = 0)
	{
		$this->find($id);
		$this->good++;
		if($this->save())
			return true;
		return false;
	}

	/**
	 * 踩
	 * @param int $id
	 * @return bool
	 */
	public function down($id = 0)
	{
		$this->find($id);
		$this->bad++;
		if($this->save())
			return true;
		return false;
	}
} 