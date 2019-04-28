<?php
	session_start();
	$page = "login";

	include('config.php');
	include('components/test.php');
	$_SESSION["login_status"] = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $CONFIG['titlename'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

</head>
<body class="regis-bg">
	<div class="container-login">
	    <div class="regis-box" >
	        <form method="POST">
	            <p id="text-lead">Login</p>
	            <legend>Username</legend>
	            <input type="text" name="username" placeholder="Username" class="input-box" required><br>
	            <legend>Password</legend>
	            <input type="password" name="password" placeholder="Password" class="input-box" required><br>
	            <button type="submit" name="form" value="login" class="submit">login</button>
	            <p id="dont-have-account" onclick="window.location.href='register.php'">Don't have an account yet?</p>
	        </form>
	    </div>
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
				if ($result[0]['password'] == hash('md5', $data['password'])) {
					$_SESSION['login_status'] = 1;
					$_SESSION['username'] = $data['username'];
					$_SESSION['uid'] = $result[0]['id'];
					$_SESSION['token'] = $result[0]['token'];
					$_SESSION['role'] = $result[0]['role'];
					if ($username != '' && $password != '') {
						header('Location: dashboard.php');
					}
					else {
						echo '<script type="text/javascript">alert("Username or Password is empty!");</script>';
					}
				}
				else{
					echo '<script type="text/javascript">alert("Username or Password incorrect!");</script>';
				}
			}
		}
	?>
    <script src="script.js"></script>
</body>
</html>

<style scoped>
	#text-lead {
		margin-left: 75px;
		color: #ffCf40;
		font-family: 'Roboto Slab', serif;
		font-size: 48px;
		font-weight: bold;
	}
	.container-login {
		padding-top: 30px;
		display: flex;
    	justify-content: center;
	}
	.regis-box {
		width: 303px;
	}
	#dont-have-account {
		cursor: pointer;
		font-family: 'Roboto', serif;
		padding: 20px;
		display: inline;
	}
	#dont-have-account:hover {
		text-decoration: underline;
	}
</style>