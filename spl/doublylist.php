<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 11:19
 */
$obj = new SplDoublyLinkedList();

$arr = [1,3,4,5,6,7,8,9,12,18];

$len = count($arr);

for ($i=0;$i < $len;++$i) {
	$obj->add($i,$arr[$i]);
}

$serialize = serialize($obj);

echo $serialize,"\r\n";

print_r(unserialize($serialize));


















//	print_r($obj);

//if ($obj->isEmpty()) {
//	echo "Adding nodes to Linked List \r\n";
//	$obj->push(2);
//	$obj->push(3);
//	$obj->push(4);
//	$obj->unshift(10);// 在元素前面加上双向链表
//}







//	print_r($obj);
//	SplDoublyLinkedList Object
//	(
//		[flags:SplDoublyLinkedList:private] => 0
//	    [dllist:SplDoublyLinkedList:private] => Array
//	(
//	)
//
//	)
//	Adding nodes to Linked List
//		SplDoublyLinkedList Object
//	(
//		[flags:SplDoublyLinkedList:private] => 0
//	    [dllist:SplDoublyLinkedList:private] => Array
//	(
//		[0] => 10
//	            [1] => 2
//	            [2] => 3
//	            [3] => 4
//	        )
//
//	)

//echo $obj->current(),"\r\n";

//$obj->rewind();

//echo $obj->current(),"\r\n";
//
//echo $obj->key(),"\r\n";
//echo $obj->next();

//echo $obj->current(),"\r\n";