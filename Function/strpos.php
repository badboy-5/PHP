<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/17
# @Software: PhpStorm
# @Author: Bad
# @DESC:strpos()查找字符串首次出现的位置，找不到字符串会返回false

$a = "121345461328171365146151";

$p = strpos($a,'1');  //首次出现的位置是0，第一个字符
echo $p."<br />";

$p2 = strpos($a,'1',4);  //从第五个字符查找1首次出现的位置
echo $p2."<br />";

if (strpos($a,'19') === false){  //这里必须使用全等，
    echo "找不到‘1’！";
}