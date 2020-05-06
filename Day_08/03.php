<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/5/3
# @Software: PhpStorm
# @Author: Bad
# @DESC:
class Student{
    private $sex,$age;
    function __set($s, $a)
    {
        echo "bad<br />";
        $this->$s = $a;
    }
    function __get($Stu){
        return $this->$Stu;
    }
}

$Stu = new Student();  //构造方法创建对象
$Stu->sex = 'male';  //自动调用__set($s,$a)方法，$s得到sex，$a得到'male'
echo $Stu->sex;  //得到私有属性值时，自动访问方法__get($Stu)方法