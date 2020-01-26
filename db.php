<?php
session_start();
$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,"nodedb");
if($conn){
    echo 'connected to db successfully';
}
else{
    die("error_occured".mysqli_error($conn));
}

$name=$_POST['user'];
$pass=md5($_POST['pass'],FALSE);
$email=$_POST['email'];
$id=$pass.$email;
$ids=md5($id,FALSE);
$_SESSION['name']=$name;
$_SESSION['pass']=$pass;
$_SESSION['id']=$ids;
$sql="insert into db(name,Email,pass,uid)values('$name','$email','$pass','$ids')";
if(mysqli_query($conn,$sql)){
    echo "Record Inserted successfully";
}
else{
    die("Error occurs".mysqli_error($conn));
}

session_destroy();
?>
<script type="text/javascript">
document.onkeydown = function(){
    switch (event.keyCode){
          case 116 : //F5 button
              event.returnValue = false;
              event.keyCode = 0;
              alert('refresh not allowed');
              return false;
          case 82 : //R button
              if (event.ctrlKey){ 
                  event.returnValue = false;
                  event.keyCode = 0;
                  alert('refresh not allowed');
                  return false;
              }
      }
  };
  </script>