<?php
	session_start(); // อันใหม่
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
	        <p id="text-lead"><br><br><br>
	            Create Your Account</p><br><br><br>
	            <legend>Email</legend>
	         <input type="email" name="email" class="input-box" placeholder="Email"><br>
	            <legend>User name</legend>
	        <input type="text" name="username" class="input-box" placeholder="username" required="required"><br>
	            <legend>Password</legend>
	        <input type="password" name="password" class="input-box" placeholder="password" required="required"><br><br>
	        <button type="submit" value="email_register" name="form" class="submit">Submit</button>
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
					$displayName = $data['displayName'];
					$sql = "INSERT INTO user(displayName,fid) VALUES('$displayName','$fid')";
				}

				if ($data['form'] == 'email_register') {
					$email = $data['email'];
					$username = $data['username'];
					$password = $data['password'];
					$sql = "INSERT INTO user(email,username,password) VALUES('$email','$username', '$password')";
				}

				$con = con();
				//echo "$sql";
				mysqli_query($con, $sql);
				$_SESSION["login_status"] = 0;
				$_SESSION['username'] = $data['username'];
				if ($email != '' && $username != '' && $password != '') {
					header('Location: success.php');
				}
				else {
					echo '<script type="text/javascript">alert("ข้อมูลไม่ครบถ้วน");</script>';
				}
			}
		 ?>

    <script src="script.js"></script>
</body>
</html>