<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 11:51
 */
$stack = new SplStack();

$stack[] = 1;
$stack[] = 2;
$stack[] = 3;

$stack->push(4);

$stack->add(4,5);

$stack->rewind();

echo $stack->count(),"\r\n";

while ($stack->valid()) {
	echo $stack->current(),"\r\n";
	$stack->next();
}