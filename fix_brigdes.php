<<?php
	require "configdb_addbrigdes.php" 
?>
<<?php 
	if (isset($_GET["ID"])) {
		$ID = $_GET["ID"] 
	}
?>
<<?php 
	if (isset($_POST["Sua cau"])) {
		$ID = $_POST["ID"];
		$Brigdes = $_POST["Brigdes"];
		$Information = $_POST["Information"];
		$Thumbnail = $_POST["Thumbnail"];
	if ($ID !="" && $Brigdes != "" && $Information != "" && $Thumbnail != "") {
			$sql = "update          set Brigdes = 'Brigdes', Information = 'Information', Thumbnail = 'Thumbnail' where id = $id  ";
			$qr = mysql_query($sql);
			header("location: brigdes.php");
		}	
	}
?>
<<?php 
	$sql = "select * from       where id = $ID ";
	$qr = mysql_query($sql);
	$row = mysql_fetch_array($qr);
?>

<form method="POST" action="">
	<label>ID</label>
	<input type="id" name="ID">
	<br>
	<label>Brigdes</label> 
	<input type="text" name="Brigdes" value="echo $row['Brigdes']">
	<br>
	<label>Information</label>
	<input type="text" name="Information" value="echo $row['Information']">
	<br>
	<label>Thumbnail</label>
	<input type="text" name="Thumbnail" value="echo $row['Thumbnail']">
	<br>	
	<input type="submit" name="Sua" value="Sua ">
</form>