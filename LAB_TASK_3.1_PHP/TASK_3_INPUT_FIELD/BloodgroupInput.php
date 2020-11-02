<?php

$k = "";

	if(isset($_REQUEST['Submit'])){
		$group = $_REQUEST['group'];
		
		if($group == ""){
			//echo " field required...";
		}else{
			$k = $group;
		}
	}



?>








<!DOCTYPE html>
<html>
<head>
	<title>Blood group</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 200px;">
<legend>BLOOD GROUP</legend>
			 <select name="group" >
                    
            
                <option value="<?=$k ?>">A+</option>
                <option value="<?=$k ?>">A-</option>
                <option value="<?=$k ?>">B+</option>
                <option value="<?=$k ?>">B-</option>
                <option value="<?=$k ?>">AB+</option>
                <option value="<?=$k ?>">AB-</option>
                <option value="<?=$k ?>">O+</option>
                <option value="<?=$k ?>">O-</option>
                </select> <br>
                <hr>
				<input type="Submit" name="Submit" value="Submit">
				</fieldset>
			
	</form>

</body>
</html>
