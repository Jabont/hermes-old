<?php
include('config.php');
$site_name = $site_name;
$site_url = $site_url;
$logo_url = $logo_url;
$logo_touch_url = $logo_touch_url;
$logo_start_url = $logo_start_url;
function get_header($title = null){
	if ($title == null) {
		$the_title = $GLOBALS['site_name']." by IT KMITL";
	}
	else{
		$the_title = "$title — ".$GLOBALS['site_name']." by IT KMITL";
	}
	include('header.php');
}

function get_footer(){
	include('footer.php');
}

function get_component($part,$data = null){	
	$data = json_decode($data);
	switch ($part) {
		case 'headbar':
		include('part_headbar.php');
		break;
		case 'sidebar-opening':
		include('part_sidebar-opening.php');
		break;
		case 'sidebar-closing':
		include('part_sidebar-closing.php');
		break;
	}
}

function get_headbar_menu($part){
	switch ($part) {
		case 'login':
		?>
		<a href="register.php" title="" class="mob-wide  t-center capital btn padding no-round ffont">
			register
		</a>
		<?php
		break;

		case 'register':
		case 'index':
		?>
		<a href="login.php" title="" class="mob-wide  t-center capital btn padding no-round ffont">
			login
		</a>
		<?php
		break;

		case 'editor':
		?>
		<span id="autorun" class="mob-wide t-center capital btn bg-ci3 cl-white padding ffont">
			auto Run
		</span> 
		<span class="mob-wide t-center capital btn btn-blue padding ffont" onclick="update()">
			update
		</span> 
		</a>
		<a href="" title="" class="mob-wide  t-center capital btn btn-blue padding ffont">
			save
		</a>
		<a href="" title="" class="mob-wide  t-center capital btn btn-blue padding ffont">
			fork
		</a>
		<?php

	}
}
?>