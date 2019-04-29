<?php
include('config.php');
$site_name = $site_name;
$site_url = $site_url;
function get_header($title = null){
	if ($title == null) {
		$the_title = $GLOBALS['site_name'];
	}
	else{
		$the_title = "$title - ".$GLOBALS['site_name'];
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?=$the_title?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="jayss2/jayss.css?<?=time()?>">
		<link rel="stylesheet" type="text/css" href="styles.css?<?=time()?>" />
		<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
		<link rel="icon" type="image/png"  href="logo.png" />
	</head>
	<?php
}

function get_component($part){
	switch ($part) {
		case 'headbar':
		?>
		<div id="headbar" class="padding">
			<theboxes boxing="2" mob="" class="top">
				<box><inner class="v-middle-wrap">
					<a href="<?=$GLOBALS['site_url']?>">
						<img src="src/logo-2.svg" class="logo auto">
						<h4 class="cl-ci1 inline-block padding-s-hzt"><?php echo $GLOBALS['site_name']?></h4>
						<span class="cl-white roboto">by IT KMITL</span>
					</a>
				</inner></box>
				<box><inner>
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
				</inner></box>
			</theboxes>
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
		<?php
		break;
	}
}
?>