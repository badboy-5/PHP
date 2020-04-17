<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:计算圆的面积和周长

function circle($r,$flag=1){
    if ($flag==1)
        $s=pi()*$r*$r;
    else
        $s=pi()*2*$r;
    return $s;
}

echo '圆的面积：'.circle(5,1)."<br />";  //flag等于1，计算圆的面积
echo '圆的面积：'.circle(5)."<br />";  //flag没有定义，默认就是为1，计算圆的面积
echo '圆的周长：'.circle(5,2);  //flag不等于1，计算圆的周长

?>