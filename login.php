<?php
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    session_start();
    $link = mysqli_connect('127.0.0.1','root','','login');
    $sql = "select * from `login` where log_name = '$name'&&log_pwd='$pwd'";
    $res = mysqli_query($link,$sql);
    if($res){
        $_SESSION['name']=123;
        echo  "ok";
    }else{
        echo  "no";
    }