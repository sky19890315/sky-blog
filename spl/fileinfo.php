<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 11:44
 */

$obj = new SplFileInfo('doublylist.php');

echo $obj->getFileInfo(),"\r\n";

echo $obj->getFilename(),"\r\n";

echo (bool)$obj->isExecutable(),"\r\n";

echo $obj->getExtension(),"\r\n";

echo (bool)$obj->getPath(),"\r\n";

echo $obj->getRealPath(),"\r\n";

echo $obj->getSize(),"\r\n";

echo $obj->getType(),"\r\n";