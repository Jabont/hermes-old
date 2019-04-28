<?php
	session_start();
	include('config.php');

	include('classroom/conn.php');

	if($_SESSION['login_status'] == 0) {
		header('Location: login.php');
	}

	$class_id = $_GET['id'];
	$exit = $_GET['exit'];

	if ($exit != 1) {
		$class = ongcon("SELECT * FROM class_main WHERE id = ".$class_id.";");
		$pass = ongcon("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
	} else {
		$sql = "DELETE FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid']."";
		echo $sql;
		con()->query($sql);
		$_SESSION['enroll'] = 2;
		header('Location: classroom.php');
		exit;
	}

	if ($pass) {
		header('Location: classroom.php');
		$_SESSION['enroll'] = 1;
	} else { ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $CONFIG['titlename']; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="classroom/ongscript.js"></script>
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #000000;" justify-content-between>
			<div onclick="window.location.href='index.php'">
			<img src="src/Logo.svg" class="logo-bar">
		<a class="navbar-brand" style="color: #FFCF40; font-family: Roboto;">HERMES</a><h7 style="color: #FFFFFF; font-family: Roboto;">By IT KMITL</h7>
			</div>
		<form class="form-inline">
				<span class="typcn typcn-zoom "style="color: #FFCF40;"></span>
			<input class="form-control mr-sm-2" style="color: #FFCF40; font-family: Roboto;" type="search" placeholder="Search Wing!" aria-label="Search">
				<div class="profile">
						<img src="https://via.placeholder.com/30">
				</div>
		</form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2" id="sidebar">
				<nav class="nav flex-column center">
					<div class="row">
						<div class="col-1 icon"><span class="typcn typcn-stopwatch"></span></div>
						<div class="col-9"><div class="nav-link disable"><span id="time-counting"></span></div></div>
					</div>

					<hr>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-user"></span>
						</div><div class="col-6"><a class="nav-link" href="#">Profile</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-pin"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Dashbroad</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-globe"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Show Case</a></div>
					</div>

					<hr>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-chart-pie"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Classroom</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-calendar"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Calendar</a></div>
					</div>

				</nav>
			</div>
			<div class="col-10 content">
				<div class="row course" id="MT18">
					<div id="MT18ClassName">
						<h1 id="ClassName"><?php echo $class[0]['name'] ?></h1>
						<h3 id="description"><?php echo $class[0]['description'] ?></h3>
						<form method="POST" id="enrollForm">
							<input type="password" name="enrollkey" placeholder="Enroll Key" class="input-box" required>
							<button type="submit" name="form" value="Enroll" class="submit">Enroll</button>
						</form>
					</div>
					<div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	    if (sizeof($_POST) > 0) {
			$data = $_POST;
			if ($data['form'] == 'Enroll') {
				$enrollkey = $data['enrollkey'];
				$check = ongcon("SELECT * FROM class_main WHERE id = '".$class_id."';");
			}
			if ($check[0]['pass_enroll'] == $enrollkey){
				echo "EZ pass";
				$sql = "INSERT INTO class_enrollment (class_id,user_id) VALUES ('".$class_id."','".$_SESSION['uid']."')";
				con()->query($sql);
				header('Location: classroom.php');
			}
			else {
				echo "SORRY";
			}
		}
     ?>
	<script>
		function paddingTextNumber(num) {
			if (num.toString().length == 1) return "0" + num;
			else return num;
		}

		function updateTime() {
			let date = new Date();
			document.querySelector("#time-counting").innerText = `${paddingTextNumber(date.getHours())}:${paddingTextNumber(date.getMinutes())}:${paddingTextNumber(date.getSeconds())}`;
		}

		updateTime();
		setInterval(function () {
			updateTime();
		}, 1000);
	</script>
</body>
</html>

<style scoped>
	#enrollForm {
		margin-top: 35px;
		margin-left: 15px;
	}

	h1, h3 {
		margin-top: 15px;
		margin-left: 15px;
		color: white;
	}
	.content {
		background: #1A1A1A;
	}
	#MT18ClassName {
		margin: auto;
		margin-top: 1em;
		background: #333333;
		width: 95%;
		height: 200px;
	}

	.course {
	}

	.icon {

	}

	p {
		color: white;
	}

	#sidebar {

		min-height: calc(100vh - 60px);
		background: #111111;
	}

	hr {
		border: 2px solid #E3E3E3;
			border-radius: 5px;
	}
</style>

<style type="text/css">
@charset 'UTF-8';
/* @FONT-FACE loads font into browser */
img{
		border-radius: 50%;
}
@font-face {
	font-family: 'typicons';
	src: url('font/typicons.eot');
	src: url('font/typicons.eot?#iefix') format('embedded-opentype'),
			 url('font/typicons.woff') format('woff'),
			 url('font/typicons.ttf') format('truetype'),
			 url('font/typicons.svg#typicons') format('svg');
	font-weight: normal;
	font-style: normal;
}
/* :before psuedo-selector inserts and styles icon */
.typcn:before {
	color: #939191;
	font-size: 30px;
	font-family: 'typicons';
	font-style: normal;
	font-weight: normal;
	speak: none;
	display: inline-block;
	text-decoration: inherit;
	width: 1em;
	height: 1em;
	font-size: 1.875em;
	text-align: center;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
}
</style>
<style type="text/css">
/* Code for individual icons */

.typcn-stopwatch:before { content: '\e10c'; } /* '&#57612;' */
.typcn-calendar-outline:before { content: '\e038'; } /* '&#57400;' */
.typcn-calendar:before { content: '\e039'; } /* '&#57401;' */
.typcn-chart-pie-outline:before { content: '\e044'; } /* '&#57412;' */
.typcn-chart-pie:before { content: '\e045'; } /* '&#57413;' */
.typcn-pin-outline:before { content: '\e0c8'; } /* '&#57544;' */
.typcn-pin:before { content: '\e0c9'; } /* '&#57545;' */
.typcn-globe-outline:before { content: '\e080'; } /* '&#57472;' */
.typcn-globe:before { content: '\e081'; } /* '&#57473;' */
.typcn-user-add-outline:before { content: '\e127'; } /* '&#57639;' */
.typcn-user-add:before { content: '\e128'; } /* '&#57640;' */
.typcn-user-delete-outline:before { content: '\e129'; } /* '&#57641;' */
.typcn-user-delete:before { content: '\e12a'; } /* '&#57642;' */
.typcn-user-outline:before { content: '\e12b'; } /* '&#57643;' */
.typcn-user:before { content: '\e12c'; } /* '&#57644;' */
.typcn-zoom:before { content: '\e14f'; } /* '&#57679;' */

</style>

	<?php } ?>

