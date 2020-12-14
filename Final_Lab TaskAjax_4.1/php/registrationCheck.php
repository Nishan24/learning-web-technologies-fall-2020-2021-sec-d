<?php

require_once('../models/userService.php');

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['id']) && !empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email'])&& !empty($_REQUEST['type'])){
        
        if(userRegistration($_REQUEST['id'], $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['email'], $_REQUEST['type'])){
            
            header('location: ../view/registration.php?msg=registration_completed');
            
        }
        
        else{
            
            header('location: ../view/registration.php?msg=registration_failed');
            
        }
        
    }
    
    else{
        
        header('location: ../view/registration.php?msg=null');
        
    }
    
}



?>