<<?php 
require_once ('../../db/dbhelper.php');

$id = '';
if (!empty($_POST)) {
	$information_id = '';
	$name_brigdes = '';
	$thumbnail = '';
	if (isset($_POST['information_id'])) {
		$information_id = $_POST['information_id'];
	}
	if (isset($_POST['name_brigdes'])) {
		$name_brigdes = $_POST['name_brigdes'];
	}
	if (isset($_POST['thumbnail'])) {
		$thumbnail = $_POST['thumbnail']
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id']
	}
	if (!empty($information_id) || !empty($name_brigdes) || !empty($thumbnail)) {
		if ($id == '') {
			$sql = 'insert into brigdes(information_id, name_brigdes, thumbnail)
			value ("'.$information_id.'", "'.$name_brigdes.'", "'..$thumbnail'")';
		}
		else{
			$sql = 'update category set information_id = "'.$information_id.'","'.name_brigdes.'", "'.thumbnail.'" where id = '.id;
		}
		
		execute($sql);
		header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = 'select * from category where id = '.$id;
	$category = executeSingleResult($sql);
	if ($category != null) {
		$information_id = $category['information_id'];
		$name_brigdes = $category['name_brigdes'];
		$thumbnail = $category['thumbnail'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Thông tin Cầu</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Quản lí Cầu</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../product/">Quản lí Thành phố</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Quản lí Đất nước</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Quản lí Châu lục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Quản lí Feedback</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Quản lí Gallery</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Quản lí User</a>
	  </li>
	 	</ul>


	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Thông tin Cầu</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<form method="POST">
						<label for="infomation_id">Thông tin:</label>
						<input type="text" name="id" value="<?=$id?>" hidden="true">
						 <input required="true" type="text" class="form-control" id="infomation_id" name="Information" value="<?=$information_id?>">
						</div>
						<div class="form-group">
						 <label for="name_brigdes">Tên Cầu:</label>
						  <input required="true" type="text" class="form-control" id="name_brigdes"
						  name="Name" value="<?=$name_brigdes?>">
						</div>
						<div class="form-group">
						 <label for="thumbnail">Thumbnail:</label>
						  <input type="date" class="form-control" id="thumbnail" name="Thumbnail" value="<?=$thumbnail?>">
						</div>
						<button class="btn btn-success">Lưu</button>
					</form>
				  
			</div>
		</div>
	</div>
</body>
</html>