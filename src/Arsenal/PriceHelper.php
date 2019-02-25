<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/2/21
 * Time: 11:11 AM
 */

namespace Alonsolee\Arsenal;

/**
 * 产品价格工具汇总
 * Class PriceHelper
 * @package App\Helper
 */
class PriceHelper
{
	/**
	 * 将分转为元，默认不保留小数点
	 * @param $cent
	 * @param string $prefix
	 * @param string $sufix
	 * @param int $decimals
	 * @param string $dec_point
	 * @param string $thousands_sep
	 * @return string
	 */
	public static function formatPrice($cent, $prefix = '', $sufix = '', $decimals = 0, $dec_point = '.', $thousands_sep = '')
	{
		return $prefix . number_format(($cent / 100), $decimals, $dec_point, $thousands_sep) . $sufix;
	}

}