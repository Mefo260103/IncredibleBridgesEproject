<<?php
	require "configdb_addbrigdes.php " 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add brigdes</title>
</head>
<body>
	<table border="1" align="text-center">
		<tr>
			<th>ID</th>
			<th>Brigde</th>
			<th>Information</th>
			<th>thumbnail</th>
		</tr>
		<<?php
			$sql = "select * from           " 
			$qr = mysqli_fetch_array($sql);
			while($row = mysqli_fetch_array($qr)){
		 ?>
		 <tr>
		 	<td><<?php echo $row["ID"] ?></td>
		 	<td><<?php echo $row["Brigdes"] ?></td>
		 	<td><<?php echo $row["Information"] ?></td>
		 	<td><<?php echo $row["thumbnail"] ?></td>
		 </tr>
		 <<?php  ?>
	</table>	
</body>
</html>