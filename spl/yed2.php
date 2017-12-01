<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 16:44
 */
function gen_one_to_three() {
	for ($i = 1; $i <= 3; $i++) {
		//注意变量$i的值在不同的yield之间是保持传递的。
		yield $i;
	}
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
	echo "$value\n";
}