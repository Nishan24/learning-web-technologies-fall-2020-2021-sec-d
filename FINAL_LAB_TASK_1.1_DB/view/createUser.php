<?php
	require_once('../php/header.php');
	require_once('../db/db.php');

	$conn = getConnection();
	//$sql = "select * from users";
	//$result = mysqli_query($conn, $sql);





	 if(isset($_REQUEST['submit'])){
    
		if(!empty($_REQUEST['userid']) && !empty($_REQUEST['name']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email'])  && !empty($_REQUEST['usertype'])){
			

			$userid = $_POST['userid'];
	       $name = $_POST['name'];
	       $password = $_POST['password'];
	       $email = $_POST['email'];
		   $usertype = $_POST['usertype'];
		   $conn = getConnection();
			
		$query = "insert into users(id,username,password,email,type) values('$userid' , '$name' , '$password', '$email','usertype')";


		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

		if($run){


			echo "form insertion successfull";
			

		}
		else{
			echo "form not submitted";
		}
	}

		else{
			

			echo "Form insertion not successfull";
		
		}
		
		
	

	 }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADD</title>
    </head>
    <body>
        <form action="createUser.php" method="post" >
            <fieldset style="width: 600px;">
                <legend><b>ADD USER<b></legend>
                <table  cellpadding="10">
                   

                    <tr>
                        <th>User ID</th>
                        <td>
                            <input type="text" name="userid"  placeholder="Enter Your User ID">
                           
                        </td>
						
                    </tr>
					
					<tr>
                        <th>USER Name</th>
                        <td>
                            <input type="text" name="name"  placeholder="Enter Your Name">
                           
                        </td>

                    </tr>
					
					<tr>
                        <th>Password</th>
                        <td>
                            <input type="password" name="password" placeholder="Enter Your Password">
                           
                        </td>
                    </tr>
					
                    <tr>
                        <th>Email</th>
                        <td>
                            <input type="text" name="email" placeholder="Enter Your Email" >
                            
                        </td>
                    </tr>
					
					<tr>
                        <th>Usertype</th>
                        <td>
                            <input type="radio" name="usertype" value="admin">Admin
                            <input type="radio" name="usertype" value="traveler">Traveler
                            <input type="radio" name="usertype" value="agency">Agency
                            <input type="radio" name="usertype" value="moderator">Moderator
                           
                        </td>
                    </tr>
					
                    
                </table>
				<input type="submit" name= "submit" value="Submit">
                   <input type="reset">
				    <a href="home.php">Back</a> 
				   
                   
            </fieldset>
        </form>
        <br/>
    </body>
</html>