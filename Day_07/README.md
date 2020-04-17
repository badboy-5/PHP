---
姓名：坏坏
学习时间：2020年4月16日
整理时间：2020年4月16日

---

[【参考博客】](https://blog.csdn.net/qq_45668124/article/details/105558752)

# 自定义函数

## 自定义函数概述

- 标准函数就是系统自带的函数，已经定义，只需要调用就可以完成一定的功能
- 标准函数不能解决所有的问题，需要使用某个功能时可以使用自定义函数
- 自定义函数可以减少代码冗余，提高代码复用率
- 自定义函数名不能和标准函数同名，自定义函数名不能用数字开始

## 无参数无返回值自定义函数

- 自定义函数格式：

```php
function function_naem([arg1,[arg2...]]){
    [函数体]
    [return 表达式]
}
```

**例**：

```php
<?php

function fun1(){
}
function fun2(){
    echo 'Hello Bad!';
}
fun2();  //调用函数，输出Hello Bad!

?>
```

## 有返回值自定义函数

**例**：计算圆的面积

```php
<?php

# 有返回值的函数
function area($r){  //这里的函数名不能定义与标准函数名相同
    $s = pi()*$r*$r；
    return $s;
}

$area = area(3);

echo $area;  //输出圆的面积

?>
```

## 带默认值参数的函数

- 函数格式：

```php
function fun_name($varname=$expression){

}
```

**例**：求圆的面积和周长

```php
<?php
header("Content-Type:text/html;charset=utf-8");

function circle($r,$flag=1){  //flag如果没有定义，则默认为1
    if ($flag==1)
        $s=pi()*$r*$r;
    else
        $s=pi()*2*$r;
    return $s;
}

echo '圆的面积：'.circle(5,1)."<br />";  //flag等于1，计算圆的面积
echo '圆的面积：'.circle(5)."<br />";  //flag没有定义，默认就是为1，计算圆的面积
echo '圆的周长：'.circle(5,2);  //flag不等于1，计算圆的周长

?>
```

## 返回数组的自定义函数

**例**：计算圆的面积和周长

```php
<?php
header("Content-Type:text/html;charset=utf-8");

function area($r){
    $s[]=pi()*$r*$r;
    $s[]=pi()*2*$r;
    return $s;
}

$radius=3;
list($s,$c)=area($radius);
echo "半径为{$radius}的圆的面积为{$s}，周长为{$c}";

?>
```

## 自定义函数文件和调用

- 将自定义函数保存到文件中，在调用该函数的页面中引入该函数所在的文件，然后再调用自定义函数

**例**：调用函数文件，计算1+2+3+...+n的值

```php
# 自定义函数文件
<?php
# 计算1+2+3+...+n的值
function sum($n){
    $s=0;
    for($i=1;$i<=$n;$i++)
    $s+=$i;
    return $s;
}

?>
```

```php
<?php
# 调用文件中的函数
include "myfanction.php";
//require "myfanction.php";  //这里include和require都可以引用函数文件

$n=100;
$s=sum($n);
echo $s;

?>
```

## 传值和传址

- **传值**：
	* 调用参数将值递给函数，函数中参数的改变不会影响调用参数
	* 调用的参数可以是变量或者表达式
- **传址**：
	* 也叫引用，调用参数，将参数本身的地址传递给函数，函数中参数的改变会影响调用参数
	* 调用参数和函数中的参数实际上是相同的存储单元
	* 调用参数时，必须是变量

**例**：

```php
<?php
function fun($arg1,&$arg2){
    $arg1+=100;
    $arg2+=100;
}

$a=5;
$b=15;
fun($a,$b);

echo $a."<br />";
echo $b;

//fun($a+5,$b+5)  //这里传址必须使用变量，不能是表达式

?>
```

**例**：通过传值与传址计算圆的周长和面积

```php
<?php
header("Content-Type:text/html;charset=utf-8");

function circle($r,&$c){
    $s=pi()*$r*$r;
    $c=pi()*2*$r;
    return $s;
}

$radius=5;
$area=circle($radius,$girth);  //地址是可以返回的
echo "圆的面积是{$radius},周长是$girth";

?>

```

> 传值实际参数不会改变，传址，实际参数会发生改变

## 全局变量计算值

- 全局变量在函数外定义，函数中添加global就可以使用全局变量，用于计算值

**例**：

```php
<?php
$a=5;
$b=15;
function fun(){
    global $a;
    $a=25;
    $b=35;
}

fun();
echo $a."----".$b;  //输出25----15

?>
```

**例**：求圆的面积和周长

```php
<?php
header("Content-Type:text/html;charset=utf-8");

$girth=0;  //全局变量
$radius=3;

function area($r){
    global $girth;
    $girth=pi()*2*$r;  //这里计算出来的值会被传递到实际参数中
    $s=pi()*$r*$r;
    return $s;
}

$s=area($radius);
echo "圆的面积是{$s},周长是{$girth}";

?>
```

**练习**：

1. 用不同的方法计算长方体的体积和表面积
2. 查找一个字符串中3的位置并保存到数组中，要求使用自定义函数和strpos函数