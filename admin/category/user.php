<<?php 
require_once ('../db/config.php');
require_once ('../db/dbhelper.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý cầu</title>
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
	    <a class="nav-link active" href="index.php">Quản lí Cầu</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="quanlithanhpho.php">Quản lí Thành Phố</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="quanlidatnuoc.php">Quản lí Đất nước</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="quanlichauluc.php">Quản lí Châu lục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="feedbacklist.php">Quản lí Feedback</a>
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
				<h2 class="text-center">Quản lí User</h2>
			</div>
			<div class="panel-body">
				<a href="add.php">
					<button class="bth bth-success">Thêm</button>	
				</a>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>fullname</th>
							<th>username</th>
							<th>password</th>
							<th>email</th>						
							<th></th>
							<th></th>							
						</tr>
					</thead>
					<tbody>
<?php 
//Lấy danh sách danh mục từ database
$sql = 'select * from users';
$usersList = queryResult($sql);

$index = 1;
foreach ($usersList as $item){
	echo '<tr>
			<td>'.($index++).'</td>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['username'].'</td>
			<td>'.$item['password'].'</td>
			<td>'.$item['email'].'</td>			
			<td>
			<a href="add.php?id='.$item['id'].'"><button class="bth bth-warning">Sửa</button></a> 
			</td>
			<td>
			<button class="bth bth-danger" onclick=deleteCategory('.$item['id'].') >Xóa</button>
			</td>
		</tr>';
}
?>	

					</tbody>
				</table>		
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function deleteCategory(id){
			var option = confirm('Bạn có chắc muốn xóa chứ')
			if (!option) {
				return;
			}
			console.log(id) 
			//ajax: dung lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete' 
			},function(data){
				location.reload()
			})
		}
	</script>
</body>
</html>
