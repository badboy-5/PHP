<?php

$a=5;
$b=15;
# $a大于$b不成立，输出$b
if ($a>$b)
    $max=$a;
else
    $max=$b;
echo $max."<br/>";
# 与上述相同
if ($a>$b)
    ;
else{
    $max=$b;
    echo $max;
}
?>