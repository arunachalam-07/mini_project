<html>  
    <head>  
        <title>User_Login_system</title>  
        
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
    </head>  
    <body>  
        <div id = "frm">  
            <h1>Login</h1>  
            <form action = "login.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> Email: </label>  
                    <input type = "email" id ="email" name  = "email" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p>     
                    <input type =  "submit" id = "btn" value = "Login" />  
                </p>  
            </>  
        </div>  
        <script>  
                function validation()  
                {  var x=document.getElementById('pass').value;
                    if(x==''){
                        alert('password should not be empty');
                        return false;
                    }
                    if(x==' '){
                        alert('password should not be empty');
                        return false;
                    }
                 
                }  
            </script>  
        
    </body>   
    </html>  
<?php
    session_start();
    if(isset($_SESSION['pass'])==true){
     header('Location:/nodes/main.php');}
     ?>