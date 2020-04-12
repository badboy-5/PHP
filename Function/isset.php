<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:isset()判断变量是否存在,只能用于变量

echo "<pre>";

var_dump(isset($a));  //判断变量a是否存在

$x = 5;
var_dump(isset($x));

var_dump(isset($a,$x));  //两个变量都存在时，输出true

unset($x);  //删除变量x
var_dump(isset($x));