<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/10
# @Software: PhpStorm
# @Author: Bad
# @DESC:is_array()判断变量是否为数组

$a = [1,2,3,4];
    if (is_array($a))  //判断变量a是否为数组
        echo 'Hello!';
/*
is_string()  //判断变量是否为字符串
is_object()  //判断变量是否为对象
is_int()  //判断变量是否为整型
is_integer()  //判断函数是否为整型
*/