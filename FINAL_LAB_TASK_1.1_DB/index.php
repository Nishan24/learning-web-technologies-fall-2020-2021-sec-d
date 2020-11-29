<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <table border="0">
        <table width="100%" >
		<table class="center">
           
        <tr>
            <td>
                <form action="php/loginchk.php" method="post">
                    <fieldset style="width: 400px;">
                        <legend><b><i>Login<b><i></legend>
                        <table  cellpadding="10">


                        <tr>
                        <th>User Name</th>
                        <td>
                            <input type="text" name="username"  placeholder="Enter Your Username">
                          
                        </td>
                    </tr>

                    <tr>
                        <th>Password</th>
                        <td>
                            <input type="password" name="password"  placeholder="Enter Password">
                          
                        </td>
                    </tr>


                    <tr>
                        
                        <td>
                        <input type="submit" name="login" value="Login">
                       
                        </td>
                    </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</center>
</body>
</html>