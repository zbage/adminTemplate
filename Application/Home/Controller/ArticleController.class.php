<?php
/**
 * Time: 14-3-3 下午8:13
 */
namespace Home\Controller;

use Common\Controller\ApiController;
use Home\Model\ArticleModel;
use Home\Services\Article;

class ArticleController extends ApiController
{
	public function index($alias = '')
	{
		$model = new ArticleModel();
		$data = $model->getArticle($alias);
		if (false != $data)
		{
			$this->data = $data;
			$this->display();
		}
	}

	public function api($id=0,$type = '')
	{
		if($id >0 && !empty($type)){
			$token = cookie(md5(get_client_ip()));
			if(empty($token)){
				$article = new ArticleModel();
				if($type == 'good'){
					if($article->praise($id))
						echo 1;
					else
						echo 0;
				}else if($type == 'bad'){
					if($article->down($id))
						echo 1;
					else
						echo 0;
				}
			cookie(md5(get_client_ip()),sha1(time()));
			exit;
			}else{
				echo 0;
			}
		}
	}
} 