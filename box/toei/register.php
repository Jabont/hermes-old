<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hermes Register</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel=stylesheet href="//jabont.com/jayss/jayss.css">
	<style type="text/css" media="screen">
		body {
 			background-image: url("./pic/bg.jpg");
 		}
	</style>
</head>
<body class="bg-cover bg-fixed">
	<!-- section name = "title" -->
	<section class="bg-black t-center">
		<div class="cont-pd upper cl-white b9 padding-l-vtc size-xl">
			<span>- - Welcome to Hermes site - -</span>
		</div>
	</section>

	<!-- section name = "Form" -->
	<section class="t-center">
		<div class="cont-pd upper cl-white b9 padding-xxl-vtc size-l">
			<theboxes boxing="1" mob="1">
				<box><inner class="round padding-l shadow bg-white">
					<div id="email_register">
						<h3>สมัครสมาชิกด้วย Email</h3>
							<form method="POST">
								<input type="email" name="email" placeholder="Email">
								<sp class="l"></sp>
								<input type="text" name="username" placeholder="username">
								<sp class="l"></sp>
								<input type="text" name="password" placeholder="password">
								<sp class="l"></sp>
								<button name="form" value="email_register">register</button>
							</form>
					</div>
					</inner></box>
			</theboxes>
		</div>
	</section>

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
				echo "$sql";
				mysqli_query($con, $sql);
				header('Location: success.php');
			}
		 ?>
</body>
</html>
