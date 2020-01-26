<?php
session_start();
echo $_SESSION['pass'];
session_destroy();
//session_destroy();
?>