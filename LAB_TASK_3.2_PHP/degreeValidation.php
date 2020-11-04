<?php
	
    if (isset($_POST['d1']) && !empty($_POST['d1'])) {


        
       $checkbox=$_POST["d1"];


       foreach ($checkbox as $value) {
    
	echo "Degree:". $value . "<br>";
}

        
    } else {
        echo "Must be select one";
    }
	
	
?>