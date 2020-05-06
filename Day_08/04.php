<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/5/3
# @Software: PhpStorm
# @Author: Bad
# @DESC:

class Age extends Exception{  //Exception异常类
    private $sex, $age;
    function __set($property,$value){
        if ($property == 'age'){
            if($value > 100)
                $this->$property = 'The vlaue input is error!';
            else
                $this->$property = $value;
        }
        if ($property == 'sex'){
            if($value == 'Male'  || $value == 'Famale')
                $this->$property = $value;
            else{  //抛出异常
                throw new Exception('The sex must be Male or Famale!');
            }
        }
    }
    function showinfo(){
        echo $this->age."<br />";
        echo $this->sex."<br />";
    }
}
# 直接修改sex值
$Stu = new Age();
$Stu->age = 105;
$Stu->sex = 'Male';
$Stu->showinfo();
# 终止程序，提示信息
$Stu = new Age();
$Stu->age = 55;
$Stu->sex = 'aaa';
$Stu->showinfo();