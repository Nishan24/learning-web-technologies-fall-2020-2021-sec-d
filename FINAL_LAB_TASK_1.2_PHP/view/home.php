<?php
	require_once('../php/header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>
	<h1>Welcome Home! </h1>
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>
</body>
</html>