<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$a=true;
$b=false;

# 逻辑与，都为真时返回真，否则为假。(&&与and作用相同)
if($a and $b)    //条件不成立
    echo '两个都为真';
else
    echo '至少有一个为假';  //输出
echo "<br/>";

# 逻辑或，都为假时返回假，否则为真。(||与or作用相同)
if ($a or $b)    //条件成立
    echo '至少有一个为真';  //输出
else
    echo '两个都为假';
echo "<br/>";

# 逻辑异或，不相同时返回真
if($a xor $b)    //条件成立
    echo '$a不等于$b';  //输出
else
    echo '$a等于$b';
echo "<br/>";

# 逻辑非，$a为真时,!$a为假
if(!$a)    //条件不成立
    echo '$a为假';
else
    echo '$a为真';  //输出
?>