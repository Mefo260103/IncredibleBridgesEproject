<?php
session_start();

// https://www.w3schools.com/php/php_file_upload.asp
// if(!isset($_SESSION['user'])) {
// 	header('Location: addadmin.php');
// 	die();
// }

if(!empty($_POST)) {
    require_once ('../admin/db/dbhelper.php');

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "insert into users (id,fullname, username, password, email) values ('','$fullname', '$username', '$password', '$email')";
	query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Gift Page</title>
</head>
<body>
<form method="post">
	<label>Fullname: </label>
	<br/>
	<input type="text" name="fullname" placeholder="Enter Fullname" />

	<br/><br/>
	<label>Username: </label>
	<br/>
	<input type="text" name="username" placeholder="Enter Username" />

	<br/><br/>
	<label>Password: </label>
	<br/>
	<input type="password" name="password" placeholder="Enter password" />

	<br/><br/>
	<label>Email: </label>
	<br/>
	<input type="email" name="email" placeholder="Enter Email" />

	<br/><br/>
	<p>
		<a href="adminlist.php">Back to list</a>
	</p>
	<button>Save</button>
</form>
</body>
</html>