<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:ksort()对数组按照键名排序

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

$x = ksort($city);  //以键升序排序，返回True
var_dump($x,$city);  //返回键和值

$z = krsort($city);  //以键降序排序，返回True
var_dump($z,$city);  //返回键和值