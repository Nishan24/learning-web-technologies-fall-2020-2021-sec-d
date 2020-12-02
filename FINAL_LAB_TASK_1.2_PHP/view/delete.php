<?php
require_once('../php/header.php');
require_once('../models/db.php');
require_once('../models/usersService.php');
//$conn=getConnection();

// if(!$conn){
//    die("Not connected..". mysqli_error($conn));
// }

   $receive = $_REQUEST['name'];

//$sql= "DELETE FROM users WHERE id= $receive ";
$data= deleteUsers($receive);//mysqli_query($conn,$sql);


if($data){
    header("location:userlist.php?deleted ");
}





?>