<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 18/1/6
 * Time: 下午2:36
 */

namespace Alonsolee\Arsenal;

/**
 * 生成指定长度指定加密参数的uuid
 * Class UUID
 * @package Alonsolee\Arsenal
 */
class UUID
{
	public static function generate($len = 16, $secrateKey = 'who are you?')
	{
		$key = md5((microtime() . uniqid() . base64_encode(random_bytes($len))) . $secrateKey);
		$key = substr($key, 0, $len);
		return $key;
	}
}