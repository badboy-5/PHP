<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算长方体的表面积与体积

function cuboid($a,$b,$h){
    $biaomianji = 2*($a*$b+$a*$h+$b*$h);
    $tiji = $a*$b*$h;
    return [$biaomianji,$tiji];
}

list($a,$b) = cuboid(2,3,4);

echo '表面积为:'.$a."<br />";
echo '体积为:'.$b;