<?php
	require_once('../php/header.php');
	require_once('../models/usersService.php');

	$userlist = getAllUsers();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo $_COOKIE['flag'];?></h1>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td>Contact Number</td>
			<td>Username</td>
			<td>Password</td>
		
			<td>Action</td>
		</tr>

		<?php 
			for($i=0; $i < count($userlist); $i++) {
		?>
				<tr>
					<td><?= $userlist[$i]['name'] ?></td>
					<td><?= $userlist[$i]['contact_no'] ?></td>
					<td><?= $userlist[$i]['username'] ?></td>
					<td><?= $userlist[$i]['password'] ?></td>
					
					<td>
						<a href="edit.php?name=<?= $userlist[$i]['name']  ?>"> EDIT</a> |
						<a href="delete.php?name=<?= $userlist[$i]['name']  ?>"> DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>