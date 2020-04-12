<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:sort()对数组排序

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

$x = sort($city);  //值升序排序，返回True
var_dump($x,$city);  //返回值

$b = rsort($city);  //值降序排序，返回True
var_dump($b,$city);  //返回值