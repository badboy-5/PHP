	姓名：王杰
	学习时间：2020年3月10日
	整理时间：2020年3月10日

# if语句

- **格式**

```php
if (条件){
  [语句序列;]
  […]
}
```

> 如果条件成立（非0，非空，非null，非false，非空字符串），则执行语句序列，否则不执行语句序列。

**例**：
```php
<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");
# 条件5>6不成立，所以不输出
if (5>6)
    echo "111<br/>";
# 条件变量a的值等于3成立，所以输出
$a=3;
if ($a==3)
    echo "222<br/>";
# 条件将4赋值给a，非0，条件成立，所以输出
if ($a=4)
    echo "333<br/>";
# 条件0等于false值成立，所以输出
if (0==false){
    echo "444<br/>";
    echo "555<br/>";
}
# 条件变量a的值等于3，不成立，所以不输出
if ($a==3)
    echo "aaa";
# 条件0与false类型数值均相等不成立，所以不输出
if (0===false)
    echo "666<br/>";
# 无论条件是否成立，均执行echo语句
if (5==6);
echo "777<br/>";
?>
```

> - `if语句`中，当输出语句是两个或两个以上时，需要使用`{}`将输出语句包裹。
> - `if语句`后有分号，则无论条件是否成立都执行空语句，后面的echo语句是否执行与if语句是否成立无关

运行结果：

	222
	333
	444
	555
	777

## if…else语句

- **格式**

```php
if (条件){
  [语句序列1;]
  […]
}
else {
	[语句序列2;]
	[…]
}
```

> 如果条件成立，则执行语句序列1，否则执行语句序列2。

**例**：
```php
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
```

> - 第一个代码，$a如果大于$b则$max等于$a，否则等于$b，输出$max
> - 第二个代码，$a如果大于$b则执行空语句，否则$max等于$b，输出$b
> - 注意！当if、else后有两个或两个以上的语句需要使用`{}`将语句包裹

运行结果：

	15
	15

## if语句的嵌套

- if语句嵌套即在if语句和if…else语句中的语句序列可以是另一个if语句或if…else语句
- if语句的嵌套中，else采取就近依靠原则，属于最近的且没有else的if语句
- 可以通过加`{}`的方式来改变else的归属

**例**：
```php
<?php

$a=5;
$b=15;

if ($a==5)
    if ($b==6)
        echo "111<br/>";
    else
        echo "222<br/>";
else
    echo "333<br/>";
?>
```

> - 首先第一个if语句判断$a的值是否等于5，成立则判断第二个if语句是否成立，否则输出333
> - 第二个if语句成立则输出111，否则输出222
> - 第一个else属于第二个if语句，第二个else语句因为就近的if已经有了归属的else，所以第二个else属于第一个if语句

运行结果：

	222

**例**：
```php
<?php

$a=5;
$b=15;

if ($a==5){
    if ($b==6)
        echo "111<br/>";
}
    else
        echo "222<br/>";
else
    echo "333<br/>";
?>
```

> - 使用`{}`改变else归属，第一个else则属于第一个if语句，第二个else因为没有归属的if语句，所以会报错。

**例**：
```php
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
```
> - `else if`中间可以加空格，可以不加
> - 判断条件满足一个之后就不在继续向后执行其他判断语句
> - 在`elseif ($a>=60)`这个语句中，它成立的前提条件是$a>=9
0不成立，且$a>=80也不成立

运行结果：

	良好！

**例**：if语句的短路运算
```php
<?php

$a=5;
$b=15;
# 先将25赋值给变量a，条件成立，因为是或运算，所以不再执行后面的赋值语句
if (($a=25)||($b=55)){
    echo "I'm Bad!<br/>";
}
# 输出变量a的值为25，b的值为15
echo '$a:'.$a."<br/>";
echo '$b:'.$b."<br/>";
?>
```

运行结果：

	I'm Bad!
	$a:25
	$b:15

# switch语句

- **格式**

```php
switch (表达式){
	case 选项1:
		语句1;break;
	case 选项2:
		语句2;break;
	…
	default:语句n+1;break;
}
```
> - 把表达式的值与多个不同选项的值进行比较，来决定执行那些代码。即表达式的值与选项的值相等，则执行其后的的语句，直到遇到break为止
> - 当表达式的值与任何一项的值都不相等，则执行default后的语句

**例**：
```php
<?php

$a=3;
switch ($a){
    case 1:
        echo "111";break;
    case 2:
        echo "222";break;
    case 3:
    case 4:
        echo "3344";
    case 5:
        echo "555";break;
    case 6:
        echo "666";break;
    default:
        echo "I'm Bad!";
}
?>
```

> - 变量a的值为3，满足`case 3`，又因为之后没有语句和`break`，则继续向后执行，直到遇到`break`或`switch语句`结束

运行结果：

	3344555

## 判断某年月有多少天

1. 每年的1、3、5、7、8、10、12都是31天
2. 每年的4、6、9、11都是30天
3. 闰年的2月是29天，平年的2月是28天

- 闰年的条件：
	* 年号能被整除
	* 年号能被4整除，但不能被100整除

```php
<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$year=2012;$month=2;
switch($month){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $days=31;break;
    case 4:
    case 6:
    case 9:
    case 11:$days=30;break;
    case 2:
        if (($year % 400==0)||($year % 4==0) && ($year % 100<>0))
            $days=29;
        else
            $days=28;
            break;
    default:
        $days=-1;break;
}

echo "{$year}年{$month}月有{$days}天";
?>
```

> - `&&`的优先级比`||`优先级高，所以先运算`&&`，`||`两边的表达式有一个成立则变量days为29，否则为28
> - `$year % 100<>0`表示变量year不能被100整除

运行结果：

	2012年2月有29天

## 判断分数对应的等次

- 分数大于或等于90为优秀，分数在70到80之间为良好，分数在60到70之间为及格，分数小于60分为不及格！

```php
<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$score=101;
if ($score>100)
    $grade="请输入100以内的成绩！";
else {
# int为取整
    $a = (int)($score / 10);
    switch ($a) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            $grade = "不及格！";
            break;
        case 6:
        case 7:
            $grade = "及格！";
            break;
        case 8:
            $grade = "良好！";
            break;
        case 9:
        case 10:
            $grade = "优秀！";
            break;
        default:
            $grade = "分数错误！";
    }
}
echo $grade;
?>
```

## 判断某年月日时这年的第几天

- 在文本域中输入年月日，用逗号隔开。输出这是`$year`年`$month`月`$days`日。
- `$days`包括：
	* `$day`
	* 从第一个月到`$month-1`月的月份天数之和

	提示：使用累加方法将一月到$month月$day日的天数相加

```php
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
    输入年月日
    <label for="textfield"></label>
    <input type="text" name="textfield" id="textfield" />
    <input type="submit" name="button" id="button" value="提交" />
</form>
</body>
</html>
# 以上内容是HTML添加文本框的代码，可以直接复制使用

# 以下为PHP代码
<?php
# 调用文本域内输入的数值
if (isset($_POST['button'])) {
    list($year, $month, $day) = explode("，", $_POST['textfield']);

//echo $year."----".$month."----".$day;

    $days = $day;
    switch ($month - 1) {
        case 11:
            $days += 30;
        case 10:
            $days += 31;
        case 9:
            $days += 30;
        case 8:
            $days += 31;
        case 7:
            $days += 31;
        case 6:
            $days += 30;
        case 5:
            $days += 31;
        case 4:
            $days += 30;
        case 3:
            $days += 31;
        case 2:
            $days += 28;
            if (($year % 400 == 0) || ($year % 4 == 0) && ($year % 100 <> 0))
                $days += 1;
        case 1:
            $days += 31;
    }

    echo "这是{$year}年的第{$days}天！";
}
?>
```

	上述代码有一个bug，年份、月份、日期没有限制，可以输入任何数。能力有限，没法解决这个问题，可以解决的欢迎留言！

# while循环

- **格式**

```php
while (表达式){
	语句1;
	[…]
}
或
while (表达式):
	语句1;
	[…]
endwhile
```

> - 如果表达式成立则执行循环体语句
> - 如果条件不成立，则不执行循环体语句
> - 第一种格式，如果有多个语句则需要使用`{}`包裹多个语句
> - 第二种格式，`while`和`endwhile`成对出现

**例**：计算1+2+3+……+100的值。
```php
<?php
$n=0;
$i=1;

while ($i<=100){
    $n+=$i;
    $i++;
}
echo $n;
?>
```

- 使用第二种格式写

```php
<?php
$n=0;
$i=1;

while ($i<=100):
    $n+=$i;
    $i++;
endwhile;
echo $n;
?>
```

> 在循环结束后，变量`i`的值为101，因为在100的时候，是满足循环条件的，当等于101时不满足，再退出循环

## do while循环

- **格式**

```php
do {
	语句1;
	[…]
}
while(条件);
```

> - `do…while`循环是先循环一次，在判断条件，条件成立（非空、非0、非false、非null、非空字符串），则再次执行循环
> - 至少执行一次
> - 如果循环体有多个语句，必须加大括号

**例**：还是计算从1到100的和
```php
<?php
$n=0;$i=1;  # 因为循环体$i先求和，在加1，所以初始变量为1

do {
    $n+=$i;
    $i++;
}while($i<=100);

echo $n."---".$i;  # 这里变量i的值为101
?>
```

运行结果：

	5050---101

- 当改变循环体的先后顺序时，再来看一下

```php
<?php

$n=0;$i=0;  //因为循环体$i先加，后求和，所以初始变量为0

do {
    $i++;
    $n+=$i;
}while($i<100);  //这里因为循环体计算的已经是100了，如果再加等号，则计算的是1到101的值
echo $n."---".$i;  //这里变量i的值为100
?>
```

运行结果：

	5050---100

# for循环

- PHP中最复杂的循环结构
- **格式**

```php
for(表达式1;表达式2;表达式3)
	语句
```

> - 第一个表达式在循环开始前无条件求值（并执行）一次
> - 第二个表达式在每次循环开始前求值，如果为TRUE，则继续循环，执行嵌套的循环语句，如果值为false。则终止循环
> - 在每次循环之后被求值（并执行）
> - 表达式1、2、3可以都没有，但是`;`不能省略

**例**：计算从1到100的和
```php
<?php

$n=0;
for($i=1;$i<=100;$i++)
    $n+=$i;

echo $n."---".$i;  //这里变量i的值为101

# 也可以写成这样
for($i=1,$n=0;$i<=100;$i++)
    $n+=$i;

echo $n."---".$i;

# 不要表达式三的写法
for($i=1,$n=0;$i<=100;)
    $n+=$i;
    $i++;
echo $n."---".$i;

#不要表达式二的写法
$n=0;
for($i=1;;$i++) {
    $n+=$i;
    if ($i==100)
        break;  //跳出switch、for、while、do…while等循环体
}

echo $n;
?>
```

# foreach循环

- 提供遍历数组的简单方式
- 仅能应用于数组和对象
- 两种语法：
	* `foreach (array_expression as $value)statement`返回数组的值
	* `foreach (array_expression as $key => $value)statement`返回数组的值和键

- **只返回数组的值**
```php
<?php

$array1=array("id"=>"55","name"=>"Bad","sex"=>"male","age"=>21);
foreach($array1 as $value)
    echo $value."<br/>";
?>
```

运行结果：

	55
	Bad
	male
	21

- **返回数组的键和值**
```php
<?php

$array1=array("id"=>"55","name"=>"Bad","sex"=>"male","age"=>21);
foreach($array1 as $key => $value)
    echo $key."---".$value."<br/>";
?>
```

运行结果：

	id---55
	name---Bad
	sex---male
	age---21

# break

- 结束当前`for`、`foreach`、`while`、`do…while`或者switch结构的执行
- `break`可以接受一个可选的数字来决定跳出几重循环

**例**：
```php
<?php
$arr = array('one','two','three','four','stop','five','six');
# each读出列表中的元素值，将值赋给$val
while (list (,$val) = each($arr)){
    if ($val == 'stop'){
        break;
    }
    echo "$val<br/>";
}
?>
```

运行结果：

	one
	two
	three
	four

**例**：跳出指定层循环
```php
<?php
$i = 0;
while (++$i){
    switch($i){
        case 5:
            echo "At 5<br/>";
            break 1;  //当变量i的值为5时，直接跳出switch循环
        case 10:
            echo "At 10;quitting<br/>";
            break 2;  //当变量i的值为10时，跳出while循环
        default:
            break;
    }
}
?>
```

运行结果：

	At 5
	At 10;quitting

**例**：判断一个数是否为素数
- 素数只有1和它本身两个因子
```php
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
```

运行结果：

	53是素数！

# continue

- 在循环结构中，用来跳过本次循环中剩余的代码并在条件求值为真时，开始执行下一次循环
- `continue`接受一个可选的数字来决定跳过几重循环到循环结尾
- 默认值为1，即跳到当前循环末尾

**例**：求1+2+4+5+7+…+97+98+100的和
```php
<?php
$s=0;
for($i=0;;) {  //这里也可以写成for ($i=0;$i<100;)
    $i++;
# 如果$i的值为3的倍数，则跳过此次循环
    if ($i % 3 == 0)
        continue;
    $s += $i;
# 如果$i的值为100，则终止循环
    if ($i==100)
        break;
}
echo $s;  //输出$s
?>
```

运行结果：

	3367

**例**：
```php
<?php
for ($i=1;$i<=1;$i++) {
    echo "111<br/>";  //条件成立，输出
    while (1) {
        echo "222<br/>";  //条件成立，输出
        while (1) {
            echo "333<br/>";  //条件成立，输出
            continue 3;  //跳出三层循环，重新进入for循环
        }
        echo "444<br/>";
    }
    echo "555<br/>";
}
?>
```

> $i=1满足条件，$i=2，进入for循环，打印111，条件1恒成立，进入第一个while循环，打印222。同样再次进入第二个while循环，打印333。跳出三层循环，重新进入到for循环。$i=2不满足条件，结束语句。

运行结果：

	111
	222
	333

> 这一节需要动手敲的代码是真的很多，需要理清思路，再去动手编写代码。需要多理解，多练习。

    以上内容均属原创，如有不详或错误，敬请指出。

<div class="post-copyright">
    <div class="author">
        <b>本文作者： </b>
        <a href="https://me.csdn.net/qq_45668124" target="_blank">
            <b>坏坏</b> 
        </a> 
    </div>
    <div class="link">
        <b>本文链接： </b>
        <a href=" <%= post.permalink %>" target="_blank "> 
			https://blog.csdn.net/qq_45668124/article/details/104779858 
		</a>
    </div>
    <div class="copyright">
        <b> 版权声明： </b>
        本博客所有文章除特别声明外，均采用  
        <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">
            CC BY-NC-SA 4.0 
        </a> 许可协议。转载请注明出处！
    </div>
</div>