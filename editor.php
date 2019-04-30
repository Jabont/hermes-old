<?php
session_start();
// if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 1) {
// 	header('location: dashboard.php');
// 	die();
// }

$page = "editor";
include('function.php');
include('components/default.php');
get_header();
?>

<body class="page-default page-editor">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ace.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ext-language_tools.js"></script>
	
	<?php get_component('headbar','{"page":"'.$page.'"}');?>
	<section id="main" class="thescreen">
		<div class="inner wide">
			<theboxes boxing="" mob="" class="rack">
				<box col="8"><inner>
					<iframe id="render" class="wide thescreen" frameborder="0" src="about:blank"></iframe>
				</inner></box>	
				<box col="4"><inner>
					<div id="coding">
						<p class="padding-m b7">HTML</p>
						<div id="html-editor" onclick="update()"></div>
			
						<p class="padding-m b7">CSS</p>
						<div id="css-editor" onclick="update()"></div>

						<p class="padding-m b7">JavaScript</p>
						<div id="js-editor" onclick="update()"></div>
					</div>
				</inner></box>	

			</theboxes>
		</div>
	</section>
	<script src="script.js"></script>
</body>
<?php get_footer() ?>
