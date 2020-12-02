<?php
	require_once('../php/header.php');
	require_once('../models/db.php');
	require_once('../models/usersService.php');

	//$conn = getConnection();
	//$sql = "select * from users";
	//$result = mysqli_query($conn, $sql);





	 if(isset($_REQUEST['submit'])){
    
		if(!empty($_REQUEST['id']) && !empty($_REQUEST['name']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email'])  && !empty($_REQUEST['usertype'])){
			
            $user = array(
                'id'=>$_POST['id'],
                'username'=>$_POST['name'],
                'password'=>$_POST['password'],
                'email'=>$_POST['email'],
                'type'=>$_POST['usertype']
             
            );
           

        $run = insertUsers($user);
        
        
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
                        <th>Employee Name</th>
                        <td>
                            <input type="text" name="name"  placeholder="Enter Your Employye Name">
                           
                        </td>
						
                    </tr>
					
					<tr>
                        <th>Contact number</th>
                        <td>
                            <input type="text" name="cno"  placeholder="Enter Your Number">
                           
                        </td>

                    </tr>
					
					<tr>
                        <th>Password</th>
                        <td>
                            <input type="password" name="password" placeholder="Enter Your Password">
                           
                        </td>
                    </tr>
					
                  
					
					<tr>
                        <th>Usertype</th>
                        <td>
                            <input type="radio" name="usertype" value="admin">Admin
                            <input type="radio" name="usertype" value="buyer">Buyer
                            
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