<html>
<title>User_Login</title>
<body>
<?php
session_start();
$mail=$_POST['email'];
$pass=md5($_POST['pass'],FALSE);
$_SESSION['host']='localhost';
$_SESSION['username']='root';
$_SESSION['password']='';
$_SESSION['database']='nodedb';
$temp=$pass.$mail;
$id=$_SESSION['id']=md5($temp,FALSE);
$conn=mysqli_connect($_SESSION['host'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);
if(!$conn){
    die("cannot establish connection".mysqli_error());
}
else{
    echo 'connection established to database';
}
//echo $_SESSION['pass'];
//echo $_SESSION['mail'];
//echo $id;
$_sql="select * from db where uid='$id'";
$rs=mysqli_query($conn,$_sql);
echo mysqli_num_rows($rs);
if(mysqli_num_rows($rs)==1){
    //echo "<script> location.href='main.php'; </script>";
    //$_SESSION['pass']=
    
    while($row=mysqli_fetch_array($rs)){
        echo $row['Email'];
        echo $row['pass'];
      $_SESSION['pass']=$row['pass'];
    }
}else{
    echo 'error';
}
if(isset($_SESSION['pass'])==true){
    header('Location:/nodes/main.php');}
    else{
        header('Location:/nodes/in.php');
    }


?>
