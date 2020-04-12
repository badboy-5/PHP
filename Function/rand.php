<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:rand()产生一个随机整数

echo rand()."<br />";  //随机产生一个随机数
echo rand(5,15)."<br />";  //产生一个5-15之间的随机数（包含5,15）
var_dump(chr(97));  //chr()将ASCII码转换为英文字符，输出a
echo "<br />";

# 产生一个5位长度的英文字符
$str = '';
for($i=0;$i<5;$i++)
    $str .= chr(rand(97,122));  //随机产生97-122之间的ASCII数，转换为英文
echo $str;