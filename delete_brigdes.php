<<?php
	require "configdb_addbrigdes.php" 
?>
<<?php 
	if (isset($_GET["ID"])) {
		$ID = $_GET["ID"] 
	}
?>
<<?php 
	$sql = "delete from        where id = $ID "
	$qr = mysql_query($sql);
	header("location: brigdes.php");
?>

