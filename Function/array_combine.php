<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_combine()创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值

echo "<pre>";

$key = ['hubei', 'yunnan', 'hunan'];
$value =['wuhan', 'kunming', 'changsha'];

$x = array_combine($key,$value);  //元素个数必须相同
var_dump($x);
