<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'ireserve' );

$matricno = $_POST['matricno'];
$pass = $_POST['password'];

$s = "select * from userlogin where matricno= '$matricno' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
  
    header('location:mainpage.php');

}else{

    header('location:login.php');

}

 ?>
