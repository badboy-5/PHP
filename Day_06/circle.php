<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算圆的面积

# 有返回值的函数
function area($r){
    $s = pi()*$r*$r;
    return $s;
}

$area = area(3);

echo $area;

?>
