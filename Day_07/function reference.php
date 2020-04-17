<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:调用文件中的函数

//include "myfanction.php";
require "myfanction.php";  //这里使用两者都可以

$n=100;
$s=sum($n);
echo $s;

?>