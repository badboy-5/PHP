<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_merge()合并一个或多个数组

echo "<pre>";

$a = [
    'hubei' => 'wuhan',
    'yunnan' => 'kunming',
                'changsha'
];
$b =[
    'hubei' => 'wuhan',
    'jiangxi' => 'nanchang',
                'jiujiang'
];

$x = array_merge($a,$b);  //字符键相同，值会覆盖，数字键相同，值不会覆盖
var_dump($x,$a,$b);