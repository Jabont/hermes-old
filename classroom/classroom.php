<?php
	session_start();
	
	include('../components/test.php');
	include('conn.php');

	if($_SESSION['login_status'] == 0) {
		header('Location: ../login.php');
	}
	
	$class_id = $_GET['id'];
	$class = ongcon("SELECT * FROM class_main WHERE id = '$class_id';");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Classroom</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
	<img src="../src/Logo_new.svg" class="logo-bar">
</head>
 <body class="regis-bg"> <br><br><br>
		<div id="text-lead">ID  : <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div>
		<div id="text-lead">Role : <?php echo $_SESSION['role'] ?></div><br><br>
		<p>roel = 999 &#3626;&#3619;&#3657;&#3634;&#3591; class &#3652;&#3604;&#3657;</p>
    <div class="regis-box">
		<p id="text-lead">Classroom</p>
		
        <button name="form" class="submit" onclick="window.location.href='createClassroom.php'">create</button>
        <?php
	        $con = con();
	        $sql = "SELECT id, name, description FROM class_main";
	        
	        if ($result = $con->query($sql)) {
		        while ($row = $result->fetch_assoc()) {
		        	echo '<button name="form" class="ong-button" onclick="window.location.href=\'classroom_enrollment.php?id='.$row['id'].'\'">'.$row['name'].'</button>';
		        }
		    } else {
		    	echo $con->error;
		    }
    	?>
    </div>
</body>