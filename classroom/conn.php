<?php
function con(){
	$link = mysqli_connect("localhost", "hermes_db", "hermesit16", "hermes_db");
	if (!$link) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
	mysqli_set_charset($link,"utf8");
	return $link;
}
function ongcon($sql) {
	$con = con();
	$res = mysqli_query($con,$sql);
	$result = array();
	$i = 0;
	while ($row = mysqli_fetch_assoc($res)){
		$result[$i] = $row;
		$i = $i + 1;
	}
	mysqli_fetch_assoc($result);
	return $result;
}
?>