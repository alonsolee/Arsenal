<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/3/3
 * Time: 12:20 AM
 */

namespace Alonsolee\Arsenal;


class JsonHelper
{
	public static function encode($data)
	{
		return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
	}
}