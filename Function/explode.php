<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:explode()将字符串变成数组

echo "<pre>";

$st = "lanqiu,zuqiu,paiqiu";
$a = explode(',',$st);  //将字符串变成数组
print_r($a);

$a = explode(',',$st,2);  //数组中只包含两个元素，最后两个会合并为一个元素
print_r($a);