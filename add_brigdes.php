<<?php
	require  "configdb_addbrigdes.php"
?>
<<?php 
	if (isset($_POST["them"])) {
		$ID = $_POST["ID"];
		$Brigdes = $_POST["Brigdes"];
		$Information = $_POST["Information"];
		$Thumbnail = $_POST["Thumbnail"];
	if ($ID !="" && $Brigdes != "" && $Information != "" && $Thumbnail != "") {
			$sql = "insert into          "
			$qr = mysql_query($sql);
			header("location: brigdes.php");
		}	
	}
?>

<form method="POST" action="">
	<label>ID</label>
	<input type="id" name="ID">
	<br>
	<label>Brigdes</label>
	<input type="text" name="Brigdes">
	<br>
	<label>Information</label>
	<input type="text" name="Information">
	<br>
	<label>Thumbnail</label>
	<input type="text" name="Thumbnail">
	<br>	
	<input type="submit" name="Them" value="Them">
</form>