<?php
	session_start();
	include('config.php');
	include('classroom/conn.php');
?>
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
			<div onclick="window.location.href='dashboard.php'">
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
						<div class="col-1"><span class="typcn typcn-user"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Profile</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-pin"></span></div>
						<div class="col-6"><a class="nav-link" href="dashboard.php">Dashbroad</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-globe"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Showcase</a></div>
					</div>

					<hr>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-chart-pie"></span></div>
						<div class="col-6"><a class="nav-link" href="classroom.php">Classroom</a></div>
					</div>

					<div class="row">
						<div class="col-1"><span class="typcn typcn-calendar"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Calendar</a></div>
					</div>

				</nav>
			</div>
			<div class="col-10 content">
				<h1>Classroom</h1>
				<a class='btn btn-info' href="#" onclick="ongalert('ยังไม่เปิด')">Create</a>
				<hr class="underText">
				<?php
					function conn() {
						$servername = "localhost";
						$username = "hermes_db";
						$password = "hermesit16";
						$dbname = "hermes_db";
						$conn = new mysqli($servername, $username, $password, $dbname);

						if ($conn->connect_error) {
							die($conn->connect_error);
						}
						else {
							mysqli_set_charset($conn, 'utf8');
							return $conn;
						}
					}

					$conn = conn();
					if (!$conn) { ?>
						<h1> Can't connect to server </h1>
					<?php
					}

					$sql = "SELECT id, name, description FROM class_main";
					if($result = $conn->query($sql)) {
						$counter = 0;
						echo "<div class='row'>";
						while ($row = $result->fetch_assoc()) {
							if ($counter % 3 == 0) {
								echo "</div><div class='row'>";
							} ?>
							<div class="col-4">
								<div class="course">
									<div class="row">
										<div class="col-3 card_"><img src="https://via.placeholder.com/30"></div>
										<div class="col-9 card_">
											<h2 style='color: #FFF'><?php echo $row['name']; ?></h2>
											<h3 style='color: #F0F0F0'><?php echo $row['description']; ?></h3>
											<?php
											$pass = ongcon("SELECT * FROM class_enrollment WHERE class_id = ".$row['id']." AND user_id = ".$_SESSION['uid'].";");
											if ($pass) {
												echo "<a class='btn btn-info' href='classroom_enrollment.php?id=".$row['id']."'>Lesson</a>";
												echo "  <a class='btn btn-info' href='classroom_enrollment.php?id=".$row['id']."&exit=1'>Enroll ออก</a>";
											} else {
												echo "<a class='btn btn-info' href='classroom_enrollment.php?id=".$row['id']."'>Enroll</a>";
											} ?>
										</div>
									</div>
								</div>
							</div>
							<?php
							$counter += 1;
						}
						echo "</div>";
					}
				?>
			</div>
		</div>
	</div>
	<script>
		var enroll = "<?php echo $_SESSION['enroll'] ?>";
		if (enroll == 1){
			ongalert('Enroll แล้ว');
			<?php $_SESSION['enroll'] = 0 ?>
		} else if (enroll == 2) {
			ongalert('Enroll ออกแล้ว');
			<?php $_SESSION['enroll'] = 0 ?>
		}
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
        .nav-link {
                color: white;
                font-family: 'Roboto', sans-serif;
        }
	.card_ {
		text-align: center;
	}
	h1 {
		color: white;
	}
	.underText {
		border: 2px solid #00D5FF;
			border-radius: 5px;
	}
	.content {
		background: #1A1A1A;
	}

	.course {
		background: #333333;
		height: 240px;

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

.typcn-zoom:before { content: '\e14f'; } /* '&#57679;' */</style>