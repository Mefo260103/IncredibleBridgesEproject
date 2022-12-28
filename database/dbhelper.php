<?php
require_once('config.php');

//insert, update, delete, select
// SQL: insert, update, delete
function execute($sql){
	//mo ket noi 
	$conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
	mysqli_set_charset('utf-8');

	//query truy van
	mysqli_query($conn, $sql);
	//dong ket noi
	mysqli_close(%conn);
}

// SQL: select lay du lieu
function executeResult($sql){
	$data = []; // noi chua du lieu dau ra

	//mo ket noi 
	$conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
	mysqli_set_charset('utf-8');

	//query truy van
	$resultset = mysqli_query($conn, $sql); // fetch lay du lieu
	while(($row = mysqli_fetch_array($resultset, 1)) != null) // 1 : giu lai key value trong cau truy van
	//dong ket noi
	mysqli_close(%conn);

	return $data;
}
