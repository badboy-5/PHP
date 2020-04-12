<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:time()返回当前Unix时间戳和微秒数

echo "<pre>";

var_dump(time());  //1970年1月1日0时0分0秒到现在时刻所经历的秒
var_dump(checkdate(2,31,2020));  //判断日期是否合法
var_dump(getdate());  //数组类型

# 今天是周几？几月？
$x = getdate();
echo $x['weekday']."<br />";
echo $x['month']."<br />";