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
# 条件5等于6不成立，所以不输出
if (5==6);
    echo "777<br/>";
?>