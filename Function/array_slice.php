<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_slice()拆分数组，从数组中取出一段

echo"<pre>";

$a = [1,2,'a'=>3,4,5,6,8,9];
$b = array_slice($a,2);  //从第2个元素开始输出
var_dump($b);

$c = array_slice($a,2,3);  //从2个开始取3个元素
var_dump($c);

$x = array_slice($a,-2);  //从倒数第2个元素开始输出
var_dump($x);

$x = array_slice($a,-4,3);  //从倒数第4个元素开始输出3个元素
var_dump($x);