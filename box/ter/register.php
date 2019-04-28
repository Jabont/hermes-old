<!DOCTYPE html>
<html>
<head>
	<title>Hermes Register</title>
	<meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//jabont.com/jayss/jayss.css">
</head>
<body>
	<div id="fb_register">
	<h3>Register Form Facbook</h3>
	<form method="POST">
		<input type="text" name="fid" placeholder="Facbook_ID">
		<input type="text" name="displayName" placeholder="Displayname">
		<button name="form" value="fb_register">Register</button>
	</form>
	</div>

	<div id="email_register">
	<h3>Register Form Email</h3>
	<form method="POST">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="username" placeholder="Username">
		<input type="text" name="password" placeholder="Password">
		<button name="form" value="email_register">Register</button>
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
		if ($data['form'] == 'fb_register') {
			$fid = $data['fid'];
			echo $displayName = $data['displayName'];
			$sql = "INSERT INTO user(displayName,fid) VALUES('".$displayName."','".$fid."')";
			}
		}

		if (sizeof($_POST) > 0) {
		$data = $_POST;
		if ($data['form'] == 'email_register') {
			$email = $data['email'];
			$username = $data['username'];
			$password = $data['password'];
			$sql = "INSERT INTO user(email,username,password) VALUES('".$email."','".$username."',".$password.")";
			}
		}
		$con = con();
		echo "$sql";
		mysqli_query($con, $sql);
	?>
</body>
</html>