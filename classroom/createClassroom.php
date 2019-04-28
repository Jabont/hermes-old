<?php
	session_start();
	
	include('../components/test.php');

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
    hello, create classroom page<br><br><br>
		<div id="text-lead">ID  : <?php echo $_SESSION['username'] ?></div>
		<div id="text-lead">UID : <?php echo $_SESSION['uid'] ?></div><br><br>
    <div class="regis-box">
    	<form method="POST">
    		<p id="text-lead">Create Your Classroom</p>
	        <legend>Name classroom</legend>
	        <input type="text" name="name_classroom" class="input-box" placeholder="Name classroom"><br>
	        <legend>Description</legend>
	        <input type="text" name="description" class="input-box" placeholder="Description"><br>
	        <legend>Pass enroll</legend>
	        <input type="text" name="pass_enroll" class="input-box" placeholder="Pass enroll"><br><br>
	        <button type="submit" value="create_classroom" name="form" class="submit">Submit</button> 
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

			if ($data['form'] == 'create_classroom') {
				$name = $data['name_classroom'];
				$description = $data['description'];
				$pass_enroll = $data['pass_enroll'];
				$owner_id = $_SESSION['uid'];
				$sql = "INSERT INTO class_main(name,description,owner_id,pass_enroll) VALUES('$name','$description', '$owner_id', '$pass_enroll')";
			}

			$con = con();
			//echo "$sql";
			mysqli_query($con, $sql);
			if ($name != '' && $description != '') {
				header('Location: classroom.php');
			}
			else {
				echo '&#3612;&#3636;&#3604;&#3652;&#3629;&#3626;&#3633;&#3626;';
			}
		}
	?>
</body>
</html>