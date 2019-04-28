<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
</head>
<body class="regis-bg">
    <div class="bar">
        <div class="main-button">
            <img src="src/LOGO4.svg" class="main-button">
        </div>
        <div class="logo-text">
            <p id="hermes">HERMES</p>
            <p id="sub_text">by IT KMITL</p>
        </div>
        <div class="btn-container">
            <button class="sign-in" onclick="window.location.href='login.php'">Sign In</button>
            <button class="sign-in" onclick="window.location.href='register.php'">Sign Up</button>
        </div>
    </div>

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
