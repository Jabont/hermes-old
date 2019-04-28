<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hermes Login</title>
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
					<div id="login">
						<h3>&#3648;&#3586;&#3657;&#3634;&#3626;&#3641;&#3656;&#3619;&#3632;&#3610;&#3610;</h3>
							<form method="POST">
								<input type="text" name="username" placeholder="username">
								<sp class="l"></sp>
								<input type="text" name="password" placeholder="password">
								<sp class="l"></sp>
								<button name="form" value="login">login</button>
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
				header('Location: welcome.php');
			}

			else{
				echo '<script type="text/javascript">alert("Invalid!");</script>';
			}
		}
	}
		?>
</body>
</html>
