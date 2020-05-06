<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/5/3
# @Software: PhpStorm
# @Author: Bad
# @DESC:

class Person{
    function fun1(){
        echo "fun1()<br />";
    }
    function __construct()
    {
        echo "bad";
    }
}
class Student extends Person{
    function showme(){
        parent::fun1();  //子类调用父类方法,调用父类的fun1()
        $this->fun1();  //调用下面的fun1()
    }
    function __construct()
    {
        echo "Boy";
    }
    function fun1(){
        echo "Student()<br />";
    }
}

$st1 = new Student();
