<?php
    function nhan(){
        if(!empty($_POST)){
            if(isset($_POST['hoten'])){
                $hoten=$_POST['hoten'];
            }
            if(isset($_POST['username'])){
                $username=$_POST['username'];
            }
            if(isset($_POST['pswd'])){
                $pswd=$_POST['pswd'];
            }
            if(isset($_POST['email'])){
                $email=$_POST['email'];
            }
            if(isset($_POST['phone'])){
                $phone=$_POST['phone'];
            }
            //tạo kết nối mysql 
            $connect = new mysqli("localhost","root","","dssinhvien");
            //cho phép php lưu bảng mã unicode(utf8)-database
            mysqli_set_charset($connect,"utf8");
            if($connect->connect_error){
                var_dump($connect->connect_error);
                die();
            }
            //thực hiện truy vấn
            $ins="INSERT INTO sinhvien(full_name,user_name,pwd,email,phone) VALUES('".$hoten."','".$username."','".$pswd."','".$email."','".$phone."') ";
            mysqli_query($connect,$ins);
    
            $connect->close();
            header('location:hienthi.php');
        }
    }
?>