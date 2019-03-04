<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/2/25
 * Time: 3:05 PM
 */

namespace Arsenal;

require __DIR__.'/../vendor/autoload.php';

use Alonsolee\Arsenal\UUID;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function test(){
//		print_r(PriceHelper::formatPrice(100,' 人民币'));
		print_r(UUID::generate(100,' 人民币'));
	}
}