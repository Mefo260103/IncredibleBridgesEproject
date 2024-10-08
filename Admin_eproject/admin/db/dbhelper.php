<?php
require_once('config.php');

function query($sql) {
	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	mysqli_query($conn, $sql);

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);
}

function queryResult($sql, $isSingle = false) {
	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$resultset = mysqli_query($conn, $sql);
	$data = [];

	while(($row = mysqli_fetch_array($resultset, 1)) != null) {
		$data[] = $row;
	}

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);

	if($isSingle) {
		if(count($data) == 0) return null;

		return $data[0];
	}
	return $data;
}

function getSecurityMD5($str) {
	$PRIVATE_KEY = '87346jGJGs23&^%&^sdfgh24jgjhsgdf';
	return md5(md5($str).$PRIVATE_KEY);
}

function checkToken() {
	if(!isset($_COOKIE['token'])) return null;

	$token = $_COOKIE['token'];
	$sql = "select * from students where token = '$token'";
	$data = queryResult($sql, true);

	return $data;
}