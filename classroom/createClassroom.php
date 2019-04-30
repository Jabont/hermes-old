<?php
	session_start();

	include('conn.php');

	if($_SESSION['login_status'] == 0) {
		header('Location: ../login.php');
	}
	if ($_SESSION['role'] != 999){
		header('Location: classroom.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Classroom</title>
	<meta charset=utf-8>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

</head>
 <body class="regis-bg">
		<br><br><br>
		<div id="text-lead">ID  : <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div><br><br>
    <div class="regis-box">
    	<form method="POST">
    		<p id="text-lead">Create Your Classroom</p>
	        <legend>Name classroom</legend>
	        <input type="text" name="name_classroom" class="input-box" placeholder="Name classroom" required><br>
	        <legend>Description</legend>
	        <input type="text" name="description" class="input-box" placeholder="Description" required><br>
	        <legend>Pass enroll</legend>
	        <input type="text" name="pass_enroll" class="input-box" placeholder="Pass enroll" required><br><br>
	        <button type="submit" value="create_classroom" name="form" class="submit">Submit</button>
	    </form>
    </div>
	<?php
		if (sizeof($_POST) > 0) {
			$data = $_POST;
			if ($data['form'] == 'create_classroom') {
				$name = $data['name_classroom'];
				$description = $data['description'];
				$pass_enroll = $data['pass_enroll'];
				$owner_id = $_SESSION['uid'];

				$sql = "INSERT INTO class_main(name,description,owner_id,pass_enroll) VALUES('$name','$description', '$owner_id', '$pass_enroll')";
				$con = con();
				mysqli_query($con, $sql);

				header('Location: classroom.php');
			}
		}
	?>
</body>
</html>