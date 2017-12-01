<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 16:29
 */

ob_start();
echo "Hello\n";

setcookie("cookiename", "cookiedata");

// ob_end_flush();