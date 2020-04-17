<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:implode()把数组变成字符串

echo "<pre>";

$a = ['lanqiu','zuqiu','paiqiu'];
$r = implode($a);
var_dump($r);

$r = implode(',',$a);  //以逗号为分隔符，将数组中的元素连接
var_dump($r);
