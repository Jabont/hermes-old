<?php
session_start();
if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 1) {
	header('location: dashboard.php');
	die();
}

$page = "register";
include('function.php');
include('components/default.php');
get_header("Register");
?>
<body class="page-default">
	<?php
	if (sizeof($_POST) > 0) {
		$data = $_POST;
		$status_error = 0;
		if ($data['form'] == 'fb_register') {
			$fid = $data['fid'];
			$displayName = $data['displayName'];
			$sql = "INSERT INTO
			user(displayName,fid)
			VALUES
			('$displayName','$fid')";
		}

		if ($data['form'] == 'email_register') {
			$email = $data['email'];
			$username = $data['username'];
			$password = $data['password'];
			$password = hash('md5', $password);
		}
		$result = array();
		$result[0] = confect("SELECT * FROM user WHERE email = '$email';");
		$result[1] = confect("SELECT * FROM user WHERE username = '$username';");
		if (!$result[0][0] || !isset($email)) {
			if (!$result[1][0] || !isset($username)) {
				if ($data['password'] != '') {
					$sql = "INSERT INTO
					user (email,username,password)
					VALUES
					('$email','$username', '$password')";
					$con = con();
					mysqli_query($con, $sql);
					$_SESSION["login_status"] = 0;
					$_SESSION['username'] = $data['username'];
					$_SESSION['register_status'] = 1;
					header('Location: login.php');
				} else {
					$status_error = 3;
				}
			} else {
				$status_error = 1;
			}
		} else {
			$status_error = 2;
		}
	}
	?>
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
							<input type="email" name="email" class="input-box" placeholder="Email" required="required">
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
						<sp class="m"></sp>
						<sp class="l t-center cl-red-7">
						<?php
							if ($status_error == 1){
								echo "Username is already or Empty";
							} elseif ($status_error == 2) {
								echo "Email is already or Empty";
							} elseif ($status_error == 3) {
								echo "Password ว่างอ่ะค้าบ ";
							}
						 ?>
						 </sp>
						<button type="submit" value="email_register" name="form" class="no-round wide capital btn btn-pink padding size-l">Register</button>
						<sp class=""></sp>
						<a href="login.php" title="" class="block t-right">Already have an account?</a>
					</form>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
<?php get_footer() ?>