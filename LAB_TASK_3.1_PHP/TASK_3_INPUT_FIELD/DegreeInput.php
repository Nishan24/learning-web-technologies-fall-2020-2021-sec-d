

<?php

$checkbox=$_POST["d1"];


foreach ($checkbox as $value) {
    
	//echo "Degree:". $value . "<br>";
}


?>






<!DOCTYPE html>
<html>
<head>
	<title>degree</title>
</head>
<body>
	<form method="POST">
		
					<fieldset style="width: 250px;">
                        <legend>Degree</legend>

                        <input type="checkbox" name="d1[]" value=" <?=$value ?>"> SSC
                        <input type="checkbox" name="d1[]" value="<?=$value ?>"> HSC
						<input type="checkbox" name="d1[]" value="<?=$value ?>"> BSc 
						<input type="checkbox" name="d1[]" value="<?=$value ?>"> MSc <hr>
						<input type="Submit" name="Submit" value="Submit">
				
            </fieldset>
            
	</form>

</body>
</html>

