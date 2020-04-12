<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_pop()将数组最后一个元素弹出（出栈）

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

$z = array_pop($city);  //删除左后一个元素并弹出删除的元素
var_dump($z,$city);