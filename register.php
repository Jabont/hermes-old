<?php
session_start();
$page = "register";
include('function.php');
include('components/default.php');
$_SESSION["login_status"] = 0;
get_header("Register");
?>
<body class="page-default">
	<?php get_component('headbar','{"page":"'.$page.'"}');?>
	<section id="main" class="thescreen v-middle-flex">
		<div class="inner cont-pd">
			<theboxes boxing="" mob="" class="top spacing -clip">
				<box col="4"></box>
				<box col="4" mob="" class=""><inner class="">
					<form method="POST">
						<h2 class="h5 cl-ci1  t-center">Create Your Account</h2>
						<label>Email
							<sp class="s"></sp>
							<input type="email" name="email" class="input-box" placeholder="Email">
						</label>
						<sp class=""></sp>
						<label>Username
							<sp class="s"></sp>
							<input type="text" name="username" class="input-box" placeholder="Username" required="required">
						</label>
						<sp class=""></sp>
						<label>Password
							<sp class="s"></sp>
							<input type="password" name="password" class="input-box" placeholder="Password" required="required">
						</label>
						<sp class="vl"></sp>
						<button type="submit" value="email_register" name="form" class="no-round wide capital btn btn-pink padding ffont size-l">Submit</button> 
						<sp class=""></sp>
						<a href="login.php" title="" class="block t-right">Already have an account?</a>
					</form>
				</inner></box>
			</theboxes>
		</div>
	</section>

	<?php
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