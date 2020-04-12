<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/12
# @Software: PhpStorm
# @Author: Bad
# @DESC:array_rand()从数组中随机取出一个或多个元素

echo "<pre>";

$city = array(
    'hubei' => 'wuhan',
    'hunan' => 'changsha',
    'yunnan' => 'kunming'
);

$a = array_rand($city);  //随机抽取一个城市
var_dump($a);  //返回键
var_dump($city[$a]);  //返回值
# 输出两个城市
$b = array_rand($city,2);
var_dump($b);
for($i=0;$i<count($b);$i++){
    $c[] = $city[$b[$i]];
}
print_r($c);