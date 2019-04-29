<?php
include('function.php');
include('components/default.php');
get_header();
?>

<body class="page-default">
	<?php get_component('headbar');?>
	<!--=== The Section Boxes : main ===-->
	<section id="main" class="thescreen v-middle-flex">
		<div class="inner cont-pd center">
			<theboxes boxing="" mob="" class="top ffont size-l">
				<box col="4" mob="" class=""></box>
				<box col="4" mob="" class=""><inner class="t-center">
					<img src="src/logo-2.svg" class="main-logo">
					<sp class="xl"></sp>
					<theboxes boxing="" mob="" class="top t-center spacing-l -clip">
						<box col="" mob="" class=""><inner class="">
							<a href="login.php" title="" class="capital btn padding wide">login</a>
						</inner></box>
						<box col="" mob="" class=""><inner class="">
							<a href="register.php" title="" class="capital btn padding wide">register</a>
						</inner></box>
					</theboxes>
					<sp class="l"></sp>
				</inner></box>
			</theboxes>
		</div>
	</section>
</body>
</html>