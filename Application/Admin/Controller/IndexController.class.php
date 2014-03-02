<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
	//重写方法在此处
	/**
	 * @param mixed $data
	 * @param string $info
	 * @param $status
	 */
	protected function ajaxReturn($data, $info, $status)
	{
		$array = array(
			'data' => $data,
			'info' => $info,
			'status' => $status
		);
		parent::ajaxReturn($array);
	}

	protected function error($msg, $url = '')
	{
		$url = empty($url)?'javascript:history.go(-1);':$url;
		$this->assign('msg',$msg);
		$this->assign('url',$url);
		$this->display('Public/error');
	}

	protected function success($url = '')
	{
		$this->assign('url',$url);
		$this->display('Public/success');
	}

	public function index()
	{
		$this->display();
	}
}