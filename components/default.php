<?php
include('config.php');
$site_name = $site_name;
function get_header($title = null){
	if ($title == null) {
		$the_title = $GLOBALS['site_name'];
	}
	else{
		$the_title = "$title - ".$GLOBALS['site_name'];
	}
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