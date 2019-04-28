<?php
	session_start();
	
	include('../components/test.php');
	include('conn.php');

	if($_SESSION['login_status'] == 0) {
		header('Location: ../login.php');
	}
	
	$class_id = $_GET['id'];
	
	$pass = ongcon("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
	if (!$pass) {
		header("Location: classroom.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>lesson</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
	
</head>
 <body class="regis-bg"> <br><br><br>
		<div id="text-lead">ID  : <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">CID : <?php echo $class_id ?></div><br><br>
    <div class="regis-box">
		<p id="text-lead">lesson</p>
		
        <button name="form" class="submit" onclick="window.location.href='createLesson.php?id=<?= $class_id ?>'">create lesson</button>
        <?php
	        $con = con();
	        $sql = "SELECT id, lesson_name, lesson_description FROM class_lesson";
	        
	        if ($result = $con->query($sql)) {
		        while ($row = $result->fetch_assoc()) {
		        	echo '<button name="form" class="ong-button" onclick="window.location.href=\'dashboard_ong.php?class_id='.$class_id.'&lesson_id='.$row['id'].'\'">'.$row['lesson_name'].'</button>';
		        }
		    } else {
		    	echo $con->error;
		    }
    	?>
    </div>