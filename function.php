<?php 
include('config.php');
function con(){
	include('config.php');
	$link = mysqli_connect($CONFIG['db_host'], $CONFIG['db_user'], $CONFIG['db_password'], $CONFIG['db_name']);
	if (!$link) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
	mysqli_set_charset($link,"utf8");
	return $link;
}
?>