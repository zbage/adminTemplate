<?php

/**
 * 截取中文字符串
 * @param $str
 * @param $start
 * @param $length
 * @return string
 */
function cn_substr($str, $start, $length)
{
	$string = new \Org\Util\String();
	return $string->msubstr($str, $start, $length, 'utf-8', false);
}

/**
 * 获取IPV4数字
 * @return mixed
 */
function getAddress()
{
	return get_client_ip(1);
}