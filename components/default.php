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
		<a href="register.php" title="" class="mob-wide  t-center capital btn padding no-round">
			register
		</a>
		<?php
		break;

		case 'register':
		case 'index':
		?>
		<a href="login.php" title="" class="mob-wide  t-center capital btn padding no-round">
			login
		</a>
		<?php
		break;

		case 'editor':
		?>
		<div class="v-middle-wrap size-m no-select">
			<span title="Love it!" class="v-bottom-wrap padding">
				<a href="#!" class="typcn typcn-heart-outline icon-zoom cl-pink"></a>
			</span> 
			<span id="autorun" title="Auto run" class="v-bottom-wrap btn cl-white padding">
				<span class="typcn typcn-flash-outline icon-zoom"></span>
			</span> 

			<span id="update" title="Update" class="v-bottom-wrap capital btn btn-blue padding padding-l-hzt" onclick="update()" style="display:none">
				<span class="typcn typcn-refresh-outline icon-zoom"></span><span class="padding-vs-hzt">update</span>
			</span> 

			<span title="Fork" class="v-bottom-wrap capital btn bg-white cl-grey padding padding-l-hzt" style="background-image: none">
				<span class="typcn typcn-tabs-outline icon-zoom"></span> <span class="padding-vs-hzt">fork</span>
			</span>

			
			<span title="Save to cloud" class="v-bottom-wrap capital btn btn-green padding padding-l-hzt">
				<span class="typcn typcn-cloud-storage-outline icon-zoom"></span> <span class="padding-vs-hzt">save</span>
			</span>
		</div>
		<?php

	}
}
?>