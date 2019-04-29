<?php
session_start();
$page = "login";
include('function.php');
include('components/default.php');
$_SESSION["login_status"] = 0;
get_header("Login");
?>

<body class="page-default">
	<?php get_component('headbar','{"page":"login"}');?>
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
						<sp class="vl"></sp>
						<button type="submit" name="form" value="login" class="no-round wide capital btn btn-pink padding ffont size-l">login</button>
						<sp class=""></sp>
						<a href="register.php" title="" class="block t-right">Don't have an account yet?</a>
					</form>
				</inner></box>
			</theboxes>
		</div>
	</section>

	<?php
	

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