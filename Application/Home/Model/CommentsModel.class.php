<?php
/**
 * Time: 14-3-2 下午4:28
 */
namespace Home\Model;

use Think\Model;

class CommentsModel extends Model
{

	protected $_auto = array(
		array('timestamp', 'time', 1, 'function'),
		array('address', 'getAddress', 1, 'function'),
		array('name','getName',1,'callback'),
		array('email','getEmail',1,'callback'),
		array('content','getContent',1,'callback'),
	);

	/**
	 * 获取文章评论
	 * @param string $alias
	 * @return bool|mixed
	 */
	public function getComments($alias = '')
	{
		$article = new ArticleModel();
		$article_id = $article->alias2id($alias);
		if (false !== $article_id)
		{
			$list = $this->field('id,name,content,timestamp,address')->where(array('article_id' => $article_id))->select();
			if (is_array($list))
			{
				return $list;
			}
			else
			{
				return false;
			}
		}
	}

	public function getName()
	{
		$name = cn_substr(htmlspecialchars(strip_tags(I('name'))),0,20);
		return $name;
	}

	public function getEmail()
	{
		$data = cn_substr(htmlspecialchars(strip_tags(I('email'))),0,20);
		return $data;
	}
	public function getContent()
	{
		$data = cn_substr(htmlspecialchars(strip_tags(I('content'))),0,256);
		return $data;
	}
} 