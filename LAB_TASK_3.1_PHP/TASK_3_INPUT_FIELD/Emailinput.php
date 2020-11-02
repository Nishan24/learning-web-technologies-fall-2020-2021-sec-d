
<?php
	
    $data = "";
    
	if(isset($_REQUEST['submit'])){

		$email = $_REQUEST['email'];
		
		if($email == ""){
			echo " field required...";
        }
        else{
			$data = $email;
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
    <form method="POST" >
        <fieldset style ="width: 250px";>
            <legend> Email </legend>

            <input type="email" name="email" value = "<?=$data ?>" > <button title="hint:sample@example.com"><b>i</b></button> <hr> <br> 
            <input type="submit" name ="submit" value="submit"> <br>
            </fieldset>
    </form>
</body>
</html>