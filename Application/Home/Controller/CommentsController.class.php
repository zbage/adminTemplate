<?php
/**
 * Time: 14-3-2 下午4:18
 */
namespace Home\Controller;

use Common\Controller\ApiController;
use Home\Model\CommentsModel;

class CommentsController extends ApiController
{
	public function ajax($alias = '')
	{
		$comments = new CommentsModel();
		$list = $comments->getComments($alias);
		$this->list = $list;
		$this->display();
	}

	public function post()
	{
		$comments = new CommentsModel();
		$data = $comments->create();
		if($comments->add()){
			$data['name'] = htmlspecialchars_decode($data['name']);
			$data['time'] = date('Y-m-d H:i:s',$data['timestamp']);
			$data['address'] = replaceAddress(long2ip($data['address']));
			$data['content'] = htmlspecialchars_decode($data['content']);
			$this->ajaxReturn(array('status'=>1,'data'=>$data));
		}else{
			$this->ajaxReturn(array('status'=>0,'info'=>'评论失败了 -_-||'));
		}
	}
}