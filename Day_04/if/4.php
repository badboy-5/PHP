<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$a=80;
if ($a>=90)
    echo "优秀！";
else if ($a>=80)
    echo "良好！";
elseif ($a>=60)
    echo "及格！";
else
    echo "不及格！";
?>