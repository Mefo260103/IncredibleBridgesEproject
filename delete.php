<?php
require_once('../admin/db/dbhelper.php');
$id=$_GET['id'];
$sql="DELETE FROM brigdes WHERE id=$id";
query($sql);

	header('Location: bridgeslist.php');

?>