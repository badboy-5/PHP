<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:查找一个字符串中3的位置并保存到数组中，要求使用自定义函数和strpos函数

echo "<pre>";

function look($a){
    $r = [];
    $b = strlen($a);
    for($i=0;$i<=$b;){
        $s = strpos($a,'3',$i);
        if(strpos($a,'3',$i)===false)
            break;
        else
            $r[] = $s++;
        $i = $s;
    }
    return $r;
}

$a = "21323124132451";

$a1 = look($a);

var_dump($a1);

