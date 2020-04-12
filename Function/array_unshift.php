<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_unshift()在数组开头插入一个或多个元素

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

# 添加只添加值，不要添加键
array_unshift($city,'jiangsu','beijin');
var_dump($city);
