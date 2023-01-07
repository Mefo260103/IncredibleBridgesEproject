<?php
if(!empty($_POST)) {
	require_once ('../admin/db/dbhelper.php');

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from adminlist where email = '$email' and password = '$pwd'";
	$user = queryResult($sql, true);

	if($user != null) {
		$_SESSION['user'] = $user;

		header('Location: adminlist.php');
		die();
	}
}
?>