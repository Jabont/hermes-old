<?php
	session_start();

	include('components/navbar.php');
	echo $navbar;
	include('conn.php');
	if($_SESSION['login_status'] == 0) {
		header('Location: login.php');
	}
	$class_id = $_GET['class_id'];
	$lesson_id = $_GET['lesson_id'];

	$pass = ongcon("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
	if (!$pass) {
		header("Location: classroom.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Hermes</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

</head>
<body class="regis-bg">
    <div id="index-box">
    	<br><br><br><br><br>
		<h1 id="text-lead">Coming soon</h1>
		<div id="text-lead">ID  		: <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">UID 		: <?php echo $_SESSION['uid'] ?></div>
		<div id="text-lead">class room  : <?php echo $class_id ?></div>
		<div id="text-lead">lesson name	: <?php echo $lesson_id ?></div>
		<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div>
		<br><br>
		<button name="form" class="ong-button" onclick="window.location.href='lesson.php'">lesson</button>

	</div>
</div>
</body>
</html>