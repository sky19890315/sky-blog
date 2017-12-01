<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 16:40
 */
function xrange($start, $end, $step = 2000) {
	for ($i = $start; $i <= $end; $i += $step) {
		yield $i;
	}
}

foreach (xrange(1, 1000000) as $num) {
	echo $num, "\n";
}