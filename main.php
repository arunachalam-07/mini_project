<?php
session_start();
if(isset($_SESSION['pass'])){
echo 'you are logged in';
}else{
    session_destroy();
    //header('Location:./in.php');
   //header('Location:/nodes/in.php');
   //echo "<script> location.href='in.php'; </script>";
}