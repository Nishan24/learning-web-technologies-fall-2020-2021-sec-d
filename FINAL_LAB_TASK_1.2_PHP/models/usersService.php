<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from employees where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById($id){

		$conn = getConnection();
		$sql = "select * from users where id =$id";
		$result = mysqli_query($conn, $sql);

		return mysqli_fetch_assoc($result);
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from employees";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into employees values('{$user['name']}', '{$user['contact_no']}', '{$user['username']}', '{$user['password']}')";

		$status = mysqli_query($conn, $sql);

		if($status){

			return true;
		}

		else{
			
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from users where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($id,$user){


		$conn = getConnection();
		$sql = "update  users set username = '{$user['username']}', password = '{$user['password']}',email ='{$user['email']}', type = '{$user['type']}' where id = $id";

		$status = mysqli_query($conn, $sql);

		if($status){

			return true;
		}

		else{
			
			return false;
		}

	}

?>