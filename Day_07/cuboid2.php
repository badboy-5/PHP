<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算长方体的表面积与体积

function cuboid($a,$b,$h){
    global $biaomianji;
    global $tiji;
    $biaomianji = 2*($a*$b+$a*$h+$b*$h);
    $tiji = $a*$b*$h;
}

cuboid(2,3,4);

echo '表面积为:'.$biaomianji."<br />";
echo '体积为：'.$tiji;