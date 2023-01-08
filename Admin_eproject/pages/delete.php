<?php
session_start();

require_once ('../admin/db/dbhelper.php');
if(!empty($_POST)) {
	$id = $_POST['id'];
	$sql = "select brigdes.id, brigdes.name_brigdes, brigdes.thumbnail, continents.name_continents, country.name_country, city.name_city, city.address
			from brigdes, continents, country, city
			where continents.id = country.continents_id and 
			country.id = city.country_id and city.id = brigdes.city_id".$id;
	query($sql);
}

$sql = "select brigdes.id, brigdes.name_brigdes, brigdes.thumbnail, continents.name_continents, country.name_country, city.name_city, city.address
from brigdes, continents, country, city
where continents.id = country.continents_id and 
country.id = city.country_id and city.id = brigdes.city_id".$_GET['id'];
$item = queryResult($sql, true);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<p>Name: <?=$item['name_brigdes']?></p>
<p><img src='<?=$item['thumbnail']?>' style="width: 120px"/></p>
<p>Address: <?=$item['address']?></p>
<p>City: <?=$item['name_city']?></p>
<p>Country: <?=$item['name_country']?></p>
<p>Continent: <?=$item['name_continents']?></p>
<p>
	<a href="bridgeslist.php">Back to list</a>
</p>

<form method="post">
	<button name="id" value="<?=$_GET['id']?>">Confirm Delete</button>
</form>
</body>
</html>