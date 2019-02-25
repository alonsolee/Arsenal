<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/2/21
 * Time: 11:06 AM
 */

namespace Alonsolee\Arsenal;

/**
 * 文件管理功能汇总
 * Class FileHelper
 * @package App\Helper
 */
class FileHelper
{
	/**
	 * 创建指定路径的文件夹
	 * @param $dir
	 * @return bool
	 */
	public static function createDir($dir)
	{
		if (!is_dir($dir)) {
			return mkdir($dir, 0755, true);
		}
		return false;
	}

	/**
	 * 删除指定路径的文件
	 * @param $filePath
	 * @return bool
	 */
	public static function deleteFile($filePath)
	{
		return unlink($filePath);
	}
}