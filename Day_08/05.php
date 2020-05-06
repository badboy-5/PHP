<?php
# header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/5/3
# @Software: PhpStorm
# @Author: Bad
# @DESC:接口
interface Interface1{
    function Login($user,$post,$sex);
    function Showinfo();
    function query($id);
}
interface Interface2{
    function login($user,$post,$sex);
    function insertuser($user,$post,$age,$pwd);
}

class Student implements Interface1,Interface2{
    public Login($user,$post,$pwd);
    function Login($user, $post, $sex){
        $this->user = $user;
        $this->post = $post;
        $this->pwd = $pwd;
    }
    function showinfo(){
    }
    function query($id){
    }
    function insertuser($user, $post, $age, $pwd){
    }
}