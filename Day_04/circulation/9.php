<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$n=53;
$flag=1;
for($i=2;$i<$n;$i++)
    if($n % $i==0){  //判断$n除了1和它本身之外是否还有其他的因子
        $flag=0;  //if语句成立则改变$flag的值
        break;
    }
if ($flag==1)  //通过$flag的值来判断$n是否为素数
    echo "{$n}是素数！";
else
    echo "{$n}不是素数！";
?>