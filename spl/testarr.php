<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 14:55
 */

for($size = 1000; $size < 50000000; $size *= 2) {
	echo PHP_EOL . "Testing size: $size" . PHP_EOL;
	for($s = microtime(true), $container = Array(), $i = 0; $i < $size; $i++) $container[$i] = NULL;
	echo "Array(): " . (microtime(true) - $s) . PHP_EOL;

	for($s = microtime(true), $container = new SplFixedArray($size), $i = 0; $i < $size; $i++) $container[$i] = NULL;
	echo "SplArray(): " . (microtime(true) - $s) . PHP_EOL;
}