<?php
session_start();
if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 1) {
	header('location: dashboard.php');
	die();
}

$page = "login";
include('function.php');
include('components/default.php');
get_header("Login");
?>

<?php
	if (sizeof($_POST) > 0) {
		$data = $_POST;
		if ($data['form'] == 'login') {
			$username = $data['username'];
			$password = $data['password'];
			$sql = "SELECT * FROM user WHERE username = '$username';";
		}
		$result = confect($sql);
		$status_error = 0;
		if ($result[0]['password'] == hash('md5', $data['password'])) {
			$_SESSION['login_status'] = 1;
			$_SESSION['username'] = $data['username'];
			$_SESSION['uid'] = $result[0]['id'];
			$_SESSION['token'] = $result[0]['token'];
			$_SESSION['role'] = $result[0]['role'];
			header('Location: dashboard.php');
		}
		else{
			$status_error = 1;
		}
	}
	?>
<body class="page-default">
	<?php get_component('headbar','{"page":"'.$page.'"}');?>
	<section id="main" class="thescreen v-middle-flex">
		<div class="inner cont-pd">
			<theboxes boxing="" mob="" class="top spacing -clip">
				<box col="4"></box>
				<box col="4" mob="" class=""><inner class="">
					<form method="POST">
						<h2 class="h5 cl-ci1  t-center">Login</h2>
						<sp class=""></sp>
						<label>
							Username
							<sp class="s"></sp>
							<input type="text" name="username" placeholder="Username" class="input cl-black" required>
						</label>
						<sp class=""></sp>
						<label>
							Password
							<sp class="s"></sp>
							<input type="password" name="password" placeholder="Password" class="input cl-black" required>
						</label>
						<sp class="m"></sp>
						<?php
							if ($status_error > 0) { ?>
								<sp class="l t-center cl-red-7">
									<?php echo "Username or Password is incorrect"; ?>
						 		</sp>
						<?php }
							else if ($_SESSION['register_status'] == 1) { ?>
								<sp class="l t-center cl-green-7">
									<?php echo "Register success!";
									$_SESSION['register_status'] = 0 ; ?>
						 		</sp>
						<?php }
							else { ?>
								<sp class="l"></sp>
						<?php } ?>
						<button type="submit" name="form" value="login" class="no-round wide capital btn btn-pink padding ffont size-l">login</button>
						<sp class=""></sp>
						<a href="register.php" title="" class="block t-right">Don't have an account yet?</a>
					</form>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
<?php get_footer() ?>
