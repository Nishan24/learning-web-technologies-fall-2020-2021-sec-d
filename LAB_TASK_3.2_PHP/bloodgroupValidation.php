<?php
    if (isset($_POST['group']) && !empty($_POST['group'])) {
        echo "group:".$_REQUEST["group"] ;
    } else {
        echo "Must be select one";
    }
	
?>