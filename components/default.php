<?php
include('config.php');
$a = "222";
echo "a = $a";
function get_header($title = null){
	echo "a = $a";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?=$the_title?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//jabont.com/jayss2/all.css">
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
		<link rel="icon" type="image/png"  href="logo.png" />
	</head>
	<?php
}
?>