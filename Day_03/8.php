<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$a=55;
$b=55.0;
$c=50;

# 判断$a是否大于$c
if($a>$c)    //条件成立
    echo  '$a大于$c';  //输出
else
    echo '$c大于$a';
echo "<br/>";

# 判断$a是否小于$c
if($a<$c)    //条件不成立
    echo '$a小于$c';
else
    echo '$c小于$a';  //输出
echo "<br/>";

# 判断$a是否小于等于$c
if($a<=$c)    //条件不成立
    echo '$a小于或等于$c';
else
    echo '$a大于$c';  //输出
echo "<br/>";

# 判断$a是否大于等于$c
if($a>=$c)    //条件成立
    echo '$a大于或等于$c';  //输出
else
    echo '$a小于$c';
echo "<br/>";

# 判断$a是否等于$c
if($a==$c)    //条件不成立
    echo '$a等于$c';
else
    echo '$a不等于$c';  //输出
echo "<br/>";

# 判断$a是否小于等于$c
if($a!=$c)    //条件成立
    echo '$a不等于$c';  //输出
else
    echo '$a等于$c';
echo "<br/>";

if($a===$b)    //条件不成立
    echo '$a等于$b,且数据类型相同';
else
    echo '$a不等于$b，或数据类型不相同';  //输出
echo "<br/>";

if($a!==$b)    //条件成立
    echo '$a不等于$b，或数据类型不相同';  //输出
else
    echo '$a等于$b,且数据类型相同';
echo "<br/>";

?>