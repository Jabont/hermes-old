<?php
  include('../config.php')
?>
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
<div class="bar">
    <div class="main-button">
        <img src="src/Logo_new.svg" class="logo-bar">
    </div>
    <div class="logo-text">
        <p id="hermes"><?php echo $CONFIG['titlename']; ?></p>
        <p id="sub_text" class="subtext" style="font-family: roboto; font-size: 10;">by IT KMITL</p>
    </div>
    <div class="btn-container">
      <?php
        if ( $page == "register" ) {
      ?>  
          <button class="sign-in" onclick="window.location.href='login.php'">Sign In</button>
      <?php
        }
        if ( $page == "login" ) {
      ?>
          <button class="sign-in" onclick="window.location.href='register.php'">Sign Up</button>
      <?php
        }
      ?>
           
    </div>
</div>
<style type="text/css" scoped>
  .bar {
    display: flex;
    background-color:#000000; 
    height: 44px;
    width: calc(100% - 6px); /* Delete border width */
    position: fixed;
    border: 3px solid black;
    z-index: 20;
  }
</style>
