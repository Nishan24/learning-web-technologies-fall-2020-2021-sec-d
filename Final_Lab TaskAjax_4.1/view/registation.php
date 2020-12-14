<!DOCTYPE html>
<head>
    <title>Registration</title>
</head>
<body>
    
    <br>
    
    <center>
        
        <fieldset style="width:500px;">
            
            <legend><h1>Registration</h1></legend>
            
            <form action="../php/registrationCheck.php" method="post">
                
                Id <br>
                <input type="text" name="id"><br>
               
                Name <br>
                <input type="text" name="username"><br>
                Password <br>

                <input type="password" name="password"><br>
                Email <br>

                <input type="email" name="email"><br>
                
                User Type [User/Admin] <br>
                
                <select name="type" >
				    <option value="User">User</option>
				    <option value="Admin">Admin</option>
				
			    
                    <input type="submit" name="submit" value="Register">
                    <input type="submit" name="submit" value="login"> <a href="../index.php">Login</a>
        </form>
            
        </fieldset>
        
        <?php
        
        if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'registration_failed'){
			echo "Registration Failed!";
		}

		if($_REQUEST['msg'] == 'null'){
			echo "Please fill up all information!";
		}
        
        if($_REQUEST['msg'] == 'registration_completed'){
			echo "Registration Completed!";
		}
        
        

		
	}
        
        ?>
        
    </center>
    
</body>
</html>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            