<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$a=15;
$b=25;

# 首先判断$a是否大于$b,成立则输出$a的值,不成立则输出$b的值
$c=($a>$b)?$a:$b;  //可以用来计算最大值
echo $c."<br/>";

# 首先判断$st是否为字符串类型,是则输出“我是坏坏！”,不是则输出“我不是字符串！”
$st="This is string!";
$d=(is_string($st))?"我是坏坏！":"我不是字符串！";
echo $d;
?>