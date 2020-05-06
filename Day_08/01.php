<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/5/2
# @Software: PhpStorm
# @Author: Bad
# @DESC:

class Person{
    public $name;  //公有的属性方法，可以继承，可以在类的外面访问
    private $sex;  //受保护的属性方法，只能在类的里面访问，不可以继承
    protected $age;  //受保护的属性方法，只能在类的里面访问，可以继承
    function fun1(){
        echo "fun1()<br />";
    }
    private function fun2(){
        echo "fun2()<br />";
    }
    function showinfo(){  //不加修饰，默认的public权限
        echo $this->name."<br />";
    }
}
class Student extends Person{  //Student是子类，继承Person
    //子类中即使不显示定义的属性方法，也含有属性和方法（从父类中继承）
}

$st1 = new Student();
$st1-> name = 25;
$st1->fun1();
$st1->showinfo();