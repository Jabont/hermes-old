<?php
	session_start();
	
	if($_SESSION['login_status'] == 0) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Hermes</title>
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

	<!-- section name = "Login" -->
	<section class="t-center">
		<div class="cont-pd upper cl-black b9 padding-xxl-vtc size-l">
			<theboxes boxing="1" mob="1">
				<box><inner class="round padding-l shadow bg-white">
					<div id="welcome">
						<h1>ยินดีต้อนรับ</h1>
						<sp class="l"></sp>
						<?php 
							echo $_SESSION['username'];
		 				?>
		 				<sp class="l"></sp>
		 				<input type="button" value="logout" onclick="window.location.href='logout.php'" />
					</div>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
</html>