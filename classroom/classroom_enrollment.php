<?php
	session_start();
	
	include('../components/test.php');
	include('conn.php');			

	if($_SESSION['login_status'] == 0) {
		header('Location: ../login.php');
	}
	
	$class_id = $_GET['id'];
	$class = ongcon("SELECT * FROM class_main WHERE id = ".$class_id.";");
	$pass = ongcon("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
	if ($pass) {
		header("Location: lesson.php?id=".$class_id);
	} else {
		// echo "NOPE";
	}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Classroom Enroll</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
	
</head>
 <body class="regis-bg"><br><br><br><br>
   	<div id="text-lead">Name class  : <?php echo $class[0]['name'] ?></div>
	<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div><br><br>
    <div class="regis-box" >
        <form method="POST">
            <legend>Enroll Key</legend>
            <input type="text" name="enrollkey" placeholder="Enroll key" class="input-box" required><br>
            <button type="submit" name="form" value="Enroll" class="submit">Enroll</button>
        </form>
    </div>	
    <?php
	    if (sizeof($_POST) > 0) {
			$data = $_POST; 
			if ($data['form'] == 'Enroll') {
				$enrollkey = $data['enrollkey'];
				$check = ongcon("SELECT * FROM class_main WHERE id = '".$class_id."';");
			}
			if ($check[0]['pass_enroll'] == $enrollkey){
				echo "EZ pass";
				$sql = "INSERT INTO class_enrollment (class_id,user_id) VALUES ('".$class_id."','".$_SESSION['uid']."')";
				con()->query($sql);
				header('Location: lesson.php?id=$class_id');
			}
			else {
				echo "FUCK";
			}
		}
     ?>
</body>
</html>
