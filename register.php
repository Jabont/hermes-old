<?php
	session_start();
	$page = "register";
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
	
	<div class="container-regis">
		
	    <div class="regis-box">
	    	<form method="POST">
		        <p id="text-lead">Create Your Account</p>
		        <legend>Email</legend>
		        <input type="email" name="email" class="input-box" placeholder="Email"><br>
		        <legend>Username</legend>
		        <input type="text" name="username" class="input-box" placeholder="Username" required="required"><br>
		        <legend>Password</legend>
		        <input type="password" name="password" class="input-box" placeholder="Password" required="required"><br><br>
		        <button type="submit" value="email_register" name="form" class="submit">Submit</button> 
		        <p id="already-have-account" onclick="window.location.href='login.php'">Already have an account?</p>
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
			
			if ($data['form'] == 'fb_register') {
				$fid = $data['fid'];
				$displayName = $data['displayName'];
				$sql = "INSERT INTO user(displayName,fid) VALUES ('$displayName','$fid')";
			}

			if ($data['form'] == 'email_register') {
				$email = $data['email'];
				$username = $data['username'];
				$password = $data['password'];
				$password = hash('md5', $password);
				$sql = "INSERT INTO user (email,username,password) VALUES ('$email','$username', '$password')";
			}

			$con = con();
			//echo "$sql";
			mysqli_query($con, $sql);
			$_SESSION["login_status"] = 0;
			$_SESSION['username'] = $data['username'];
			if ($email != '' && $username != '' && $password != '') {
				$_SESSION['register_status'] = 1;
				header('Location: success.php');
			}
			else {
				echo '<script type="text/javascript">alert("&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3617;&#3656;&#3588;&#3619;&#3610;&#3606;&#3657;&#3623;&#3609;");</script>';
			}
		}
	?>

    <script src="script.js"></script>
</body>
</html>

<style scoped>
	.div{
		width: 100px;
	}
	.container-login {
		padding-top: 30px;
		display: flex;
    	justify-content: center;
	}
	.regis-box {
		word-wrap: normal;
		width: 303px;
	}
	form {
		
	}
	#text-lead {
		color: #ffCf40;
		font-family: 'Roboto Slab', serif;
		font-size: 48px;
		font-weight: bold;
	}
	#already-have-account {
		cursor: pointer;
		font-family: 'Roboto', serif;
		padding: 10px;
		display: inline;
	}
	#already-have-account:hover {
		text-decoration: underline;
	}
</style>