<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:trim()去除字符串首尾处的空白字符（或者其他字符）

echo "<pre>";

$a = '    123456     ';

var_dump(trim($a));  //默认去掉空格
var_dump(trim($a,' '));  //去掉空格
var_dump(trim($a,'1'));  //没有去掉空格之前，1在中间，不能去掉
var_dump(trim($a,' 1'));  //去掉空格，去掉1
var_dump(trim($a,' 2'));  //去掉空格，2没有在两边，无法去掉

/*
ltrim()  //去掉左边
rtrim()  //去掉右边
*/