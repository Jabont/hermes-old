<?php
	session_start();

	include('../components/test.php');

	if($_SESSION['login_status'] == 0) {
		header('Location: ../login.php');
	}

	$class_id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Lesson</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

</head>
 <body class="regis-bg"><br><br><br>
		<div id="text-lead">ID  : <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div><br><br>
    <div class="regis-box">
    	<form method="POST">
    		<p id="text-lead">Create Your Lesson</p>
	        <legend>Name lesson</legend>
	        <input type="text" name="lesson_name" class="input-box" placeholder="Name lesson" required="required"><br>
	        <legend>Description</legend>
	        <input type="text" name="lesson_description" class="input-box" placeholder="Description" required="required"><br>
	        <legend>Lesson order</legend>
	        <input type="text" name="lesson_order" class="input-box" placeholder="Lesson order" required="required"><br>
	        <button type="submit" value="lesson" name="form" class="submit">create lesson</button>
	    </form>
    </div>
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
		if (sizeof($_POST) > 0) {
			$data = $_POST;
			if ($data['form'] == 'lesson') {
				echo "EIEI";
				$lesson_name = $data['lesson_name'];
				$lesson_description = $data['lesson_description'];
				$lesson_order = $data['lesson_order'];
				$sql = "INSERT INTO class_lesson(class_id,lesson_name,lesson_description,lesson_order) VALUES('$class_id','$lesson_name', '$lesson_description', '$lesson_order')";
			}

			$con = con();
			//echo "$sql";
			mysqli_query($con, $sql);
			header("Location: lesson.php?id=".$class_id);
		}
	?>
</body>
</html>