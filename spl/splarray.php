<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 14:35
 */

$arr = new SplFixedArray(100000);
$startTime = microtime(true);
	foreach ($arr as $key => $value) {

	}
//$len = count($arr);
	for ($i = 0; $i < $len ; ++$i) {

	}
//	while ($arr->valid()) {
//
//	}

$arr2 = range(0,100000);
//print_r($arr2);
//foreach ($arr2 as $key => $value) {
//
//}


$endTime = microtime(true);

echo 'used : ',($endTime - $startTime)," second \r\n";

