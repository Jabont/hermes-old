<?php
	session_start();
	
	if($_SESSION['register_status'] == 0) {
		header('Location: register.php');
	}
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
    <?php include('/components/navbar.php'); ?>
	<div class="regis-box">
        <p id="text-lead"><br><br><br>
            Registration Successful
        </p>
        <br>
        <div id="text-lead">ID : <?php echo $_SESSION['username'] ?></div><br><br>
        <br><br>
	    <button class="ong-button" onclick="window.location.href='login.php'">Login</button>
    </div>
</body>
</html>
