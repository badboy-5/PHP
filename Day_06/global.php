<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算圆的面积和周长

$girth=0;  //全局变量
$radius=3;

function area($r){
    global $girth;
    $girth=pi()*2*$r;
    $s=pi()*$r*$r;
    return $s;
}

$s=area($radius);
echo "圆的面积是{$s},周长是{$girth}";

?>
