<!DOCTYPE html>

<head>
   
    <title>Login</title>
</head>
<body>
    <br>
    <center>
    <fieldset>
            
            <legend><h1>Login</h1></legend>

        <form action="php/loginCheck.php" method="post">
            
        User Id <br>
                <input type="text" name="id"><br><br>
                Password <br>
                <input type="text" name="password"><br><br>
                <input type="checkbox" name="rememberMe" value="Remember Me"> Remember Me
                <hr>
                <input type="submit" name="submit" value="Login"> <a href="view/registration.php">Register</a>
                
        
                
            
        </form>
        </fieldset>
            
        
    </center>
    </body>
    </html>