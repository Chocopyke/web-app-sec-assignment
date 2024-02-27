<?php 
    include("connection.php");
    include("login.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid() {
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                
                // Regular expression to check if the input contains only letters and digits
                var letterNumber = /^[0-9a-zA-Z]+$/;
                
                if (user.length === 0 && pass.length === 0) {
                    alert("Username and password fields are empty!!!");
                    return false;
                } else if (user.length === 0) {
                    alert("Username field is empty!!!");
                    return false;
                } else if (pass.length === 0) {
                    alert("Password field is empty!!!");
                    return false;
                } else if (!user.match(letterNumber)) {
                    alert("Username should contain only letters and digits!!!");
                    return false;
                } else if (!pass.match(letterNumber)) {
                    alert("Password should contain only letters and digits!!!");
                    return false;
                }
            }                
        </script>
    </body>
</html>