<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:通过传值与传址计算圆的周长与面积

function circle($r,&$c){
    $s=pi()*$r*$r;
    $c=pi()*2*$r;
    return $s;
}

$radius=5;
$area=circle($radius,$girth);  //地址是可以返回的
echo "圆的面积是{$radius},周长是$girth";

?>
