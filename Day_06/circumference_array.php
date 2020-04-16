<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:返回数组计算圆的面积和周长

function area($r){
    $s[]=pi()*$r*$r;
    $s[]=pi()*2*$r;
    return $s;
}

$radius=3;
list($s,$c)=area($radius);
echo "半径为{$radius}的圆的面积为{$s}，周长为{$c}";

?>
