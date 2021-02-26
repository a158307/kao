<?php

    $link = mysqli_connect('127.0.0.1','root','','login');
    $sql = "select * from `student`";
    $res = mysqli_query($link,$sql);
    if($res){
        header("location:student1.php?"+res,$res);
    }else{
        echo  "no";
    }