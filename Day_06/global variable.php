<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:使用全局变量计算值

$a=5;
$b=15;
function fun(){
    global $a;
    $a=25;
    $b=35;
}

fun();
echo $a."----".$b;  //输出25----15

?>
