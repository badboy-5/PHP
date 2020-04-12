<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:round()对浮点数进行四舍五入

echo "<pre>";

var_dump(round(15.5453));  //四舍五入，输出float(16)
var_dump(round(15.0453));  //四舍五入，输出float(15)
var_dump(round(15.5453,2));  //保留两位小数，输出(15.55)
var_dump(round(155453,-3));  //输出155000