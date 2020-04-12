<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_shift()将数组的第一个元素移出数组

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

array_shift($city);
var_dump($city);
