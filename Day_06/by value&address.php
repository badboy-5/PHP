<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:传值与传址

function fun($arg1,&$arg2){
    $arg1+=100;
    $arg2+=100;
}

$a=5;
$b=15;
fun($a,$b);

echo $a."<br />";
echo $b;

//fun($a+5,$b+5)  //这里传址必须使用变量，不能是表达式

?>