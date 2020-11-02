

<?php

$checkbox=$_POST["d1"];


foreach ($checkbox as $value) {
    
	echo "Degree:". $value . "<br>";
}


?>






<!DOCTYPE html>
<html>
<head>
	<title>degree</title>
</head>
<body>
	<form method="POST" action="DegreeSame.php">
		
					<fieldset style="width: 250px;">
                        <legend>Degree</legend>

                        <input type="checkbox" name="d1[]" value="SSC"> SSC
                        <input type="checkbox" name="d1[]" value="HSC"> HSC
						<input type="checkbox" name="d1[]" value="BSc"> BSc 
						<input type="checkbox" name="d1[]" value="MSc"> MSc <hr>
						<input type="Submit" name="Submit" value="Submit">
				
            </fieldset>
            
	</form>

</body>
</html>

