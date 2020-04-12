<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_push()将一个或多个元素压入数组的末尾（入栈）

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

$x = array_push($city,'chengdu','chongqin');
var_dump($x,$city);