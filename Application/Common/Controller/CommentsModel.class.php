<?php
/**
 * Time: 14-3-2 下午4:28
 */
namespace Common\Controller;

use Think\Model;

class CommentsModel extends Model
{
	protected $_auto = array(
		array('timestamp', 'time', 1, 'function'),
		array('address', 'getAddress', 1, 'function'),
	);
} 