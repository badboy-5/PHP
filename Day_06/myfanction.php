<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算1+2+3+...+n的值

function sum($n){
    $s=0;
    for($i=1;$i<=$n;$i++)
    $s+=$i;
    return $s;
}

?>