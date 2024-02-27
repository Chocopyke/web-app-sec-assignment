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
                <input type="text" id="user" name="user" required></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid() {
                var user = document.form.user.value.trim();
                var pass = document.form.pass.value.trim();
                
                // Regular expression to check if the input contains only letters and digits
                var regex = /^[0-9a-zA-Z_-]+$/;
                
                var userValid = user.length > 0 && user.match(regex);
                var passValid = pass.length > 0 && pass.match(regex);
                
                if (!userValid || !passValid) {
                    if (!userValid) {
                        alert("Username should contain only letters, digits and "_" "-" !!!");
                    }
                    if (!passValid) {
                        alert("Password should contain only letters, digits and "_" "-" !!!");
                    }
                    return false;
                }
                return true;
            }             
        </script>
    </body>
</html>