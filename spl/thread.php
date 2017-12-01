<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 15:57
 */
class HelloWorld extends Thread {
	public function __construct($world) {
		$this->world = $world;
	}

	public function run() {
		print_r(sprintf("Hello %s\n", $this->world));
	}
}

$thread = new HelloWorld("World");

if ($thread->start()) {
	printf("Thread #%lu says: %s\n", $thread->getThreadId(), $thread->join());
}