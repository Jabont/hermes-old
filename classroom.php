<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "classroom";
include('function.php');
include('components/default.php');



get_header("Classroom");
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<div class="bg-cover bg-fixed cover-wrap underline bd-ci-purple" style="background-image:var(--cover-gd-color),url('http://whatsonmyblackboard.files.wordpress.com/2015/06/20150630_19074022.jpg')">
		<div class="cont-pd inner">
			<theboxes class="t-center wide">
				<p class="upper cover-lead size-s">classroom</p>
				<a href="#!"><h1 class="h4">Multimedia</h1></a>
				<sp class=""></sp>
				<div class="t-shadow cover-caption">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<sp class="s"></sp>
					<div>
						— <a href="#!" class="">@Jabont</a>
					</div>
				</div>
			</theboxes>
		</div>
		<div class="capital t-shadow " style="background-image:var(--cover-gd-fade)">
			<div class="cont-pd inner t-center">
				<sp></sp>
				<h3>
					<span class="padding-hzt"><span class="size-vl typcn typcn-book"></span> 8 units</span> | 
					<span class="padding-hzt"><span class="size-vl typcn typcn-briefcase"></span> 12 works</span> | 
					<span class="padding-hzt"><span class="size-vl typcn typcn-feather"></span> 389 wings</span> |
					<span class="padding-hzt"><span class="size-vl typcn typcn-group-outline"></span> 273 members</span>
				</h3>
				<sp></sp>
			</div>
		</div>
	</div>
	<main class="cont-pd inner padding-rm-vtc">
		<box col=6>
			<h1>Hi</h1>
		</box>	
	</main>
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>