<?php
    $stu_name =  $_POST['stu_name'];
    $stu_class =  $_POST['stu_class'];
    $stu_img =  $_POST['stu_img'];
    $stu_info =  $_POST['stu_info'];
    $link = mysqli_connect('127.0.0.1','root','','login');
    $sql = "insert into student values(null,'$stu_name','$stu_class','$stu_img','$stu_info')";
    $res = mysqli_query($link,$sql);
    if($res){
        echo  "添加成功";
        header("location:student2.php");
    }else{
        echo  "添加失败";
    }