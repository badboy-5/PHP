<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:list()遍历数组，返回数组的类型

echo "<pre>";

$grades = [
    85,
    95,
    100
];
$z = list($a,$b,$c) = $grades;
var_dump($a,$b,$z);