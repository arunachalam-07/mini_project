<?php
session_start();
echo $_SESSION['name'];
echo $_SESSION['pass'];
session_destroy();
//session_destroy();
echo 'you are logged out';
?>