<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A Little Hermes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
    
</head>
<body class="regis-bg">
    <?php
        include('components/navbar.php');
        echo $navbar_style;
        echo $navbar;
    ?>
    <div class="regis-box">
        <form action="login_send.php" method="POST">
            <p class="paragraph" id="text-lead">
                <br><br><br>Login
            </p>
            <br><br><br>
            <legend>Username</legend>
            <input type="text" name="username" placeholder="Username" class="input-box" required><br>
            <legend>Password</legend>
            <input type="password" name="password" placeholder="Password" class="input-box" required><br>
            <input type="submit" name="submit" class="submit">
        </form>
    </div>

    <?php
        if (!empty($_SESSION['alert'])) {
            echo "<script> alert(".$_SESSION['alert'].") </script>";
        }
    ?>
    <script src="script.js"></script>
</body>
</html>