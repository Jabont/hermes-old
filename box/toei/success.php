<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hermes Welcome</title>
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

	<!-- section name = "Success" -->
	<section class="t-center">
		<div class="cont-pd upper cl-black b9 padding-xxl-vtc size-l">
			<theboxes boxing="1" mob="1">
				<box><inner class="round padding-l shadow bg-white">
					<div id="email_register">
						<h3>สมัครสมาชิกสำเร็จ</h3>
						<?php 
							echo $_SESSION['username'];
		 				?>
		 				<sp class="l"></sp>
						<input type="button" value="login" onclick="window.location.href='login.php'" />
					</div>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
</html>
