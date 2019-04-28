<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A Little Hermes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
    
</head>
<body class="regis-bg">
    <div class="bar">
        <div class="main-button">
            <img src="src/LOGO4.svg" class="main-button">
        </div>
        <div class="logo-text">
            <p id="hermes">HERMES</p>
            <p id="sub_text">by IT KMITL</p>
        </div>
        <div class="btn-container">
            <button class="sign-in" onclick="window.location.href='login.php'">Sign In</button>
            <button class="sign-in" onclick="window.location.href='register.php'">Sign Up</button>
        </div>
    </div>
    <div class="regis-box">
        <form method="POST">
            <p class="paragraph" id="text-lead">
                <br><br><br>Login
            </p>
            <br><br><br>
            <legend>Username</legend>
            <input type="text" name="username" placeholder="Username" class="input-box" required><br>
            <legend>Password</legend>
            <input type="password" name="password" placeholder="Password" class="input-box" required><br>
            <button type="submit" name="form" value="login" class="submit">login</button>
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
		if ($data['form'] == 'login') {
			$username = $data['username'];
			$password = $data['password'];
			$sql = "SELECT * FROM user WHERE username = '$username';";
		}
		$con = con();
		$res = mysqli_query($con,$sql);
		$result = array();
		$i = 0;
		while ($row = mysqli_fetch_assoc($res)){
			$result[$i] = $row;
			$i = $i + 1;
		}
		mysqli_fetch_assoc($result);
		if (sizeof($result) == 1) {

			if ($result[0]['password'] == $data['password']) {
				$_SESSION['login_status'] = 1;
				$_SESSION['username'] = $data['username'];
				if ($username != '' && $password != '') {
					header('Location: welcome.php');
				}
				else {
					echo '<script type="text/javascript">alert("username หรือ password ต้องไม่มีช่องว่าง");</script>';
				}
			}
			else{
				echo '<script type="text/javascript">alert("username หรือ password ไม่ถูกต้อง");</script>';
			}
		}
	}
		?>
    <script src="script.js"></script>
</body>
</html>