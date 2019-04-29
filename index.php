<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 1) {
	include('dashboard.php');
	die();
}

include('function.php');
include('components/default.php');
get_header();
?>

<body class="page-default">
	<?php get_component('headbar','{"page":"index"}');?>
	<!--=== The Section Boxes : main ===-->
	<section id="main" class="thescreen v-middle-flex">
		<div class="inner cont-pd">
			<theboxes class="top ffont size-l">
				<box col="4" mob="" class=""></box>
				<box col="4" mob="" class=""><inner class="t-center">
					<div class="padding-xl-hzt">
						<img src="<?=$logo_url?>" class="wide">
					</div>
					<sp class="xl"></sp>
					<theboxes boxing="" mob="" class="top t-center spacing-l -clip">
						<box col="" mob="" class=""><inner class="">
							<a href="login.php" title="" class="no-round capital btn padding wide">login</a>
						</inner></box>
						<box col="" mob="" class=""><inner class="">
							<a href="register.php" title="" class="no-round capital btn padding wide">register</a>
						</inner></box>
					</theboxes>
					<sp class="l"></sp>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
<?php get_footer() ?>