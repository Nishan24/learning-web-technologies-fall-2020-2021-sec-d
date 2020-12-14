<?php


require_once('db.php');

function userRegistration($id, $username, $password, $email, $type){
    
    $conn = getConnection('localhost', 'root', '', 'webtech');
    $sql = "insert into user (id,username,password,email,type) values ('$id', '$username', '$password', '$email', '$type')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function validateUser($id, $password){
    
    $conn = getConnection('localhost', 'root', '', 'webtech');
    $sql = "select * from user where username = '$id' and password = '$password'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}
