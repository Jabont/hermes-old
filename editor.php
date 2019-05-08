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
	<script src="ace/src/ace.js"></script>
	<script src="ace/src/ext-language_tools.js"></script>
	
	<?php get_component('headbar','{"page":"'.$page.'"}');?>
	<section id="main" class="thescreen">
		<div class="inner wide">
			<theboxes boxing="" mob="" class="rack">
				<box col="8"><inner>
					<iframe id="render" class="wide thescreen" frameborder="0" src="about:blank"></iframe>
				</inner></box>	
				<box col="4"><inner>
					<div id="coding" class="bg-vblack">
						<section id="html-panel" open="1" class="section-editor" panel="html">
							<a href="#!" onclick="panelToggle(this)" panel="html"><theboxes boxing="" mob="" class="middle padding-s-hzt">
								<box col="10" mob="" class=""><inner class="">
									<p class="padding-s size-s b7 upper cl-white">html</p>
								</inner></box>
								<box col="2" mob="" class=""><inner class="t-right">
									<span class="typcn typcn-minus cl-white toggle-sign" panel="html"></span>
								</inner></box>
							</theboxes></a>
							<div id="html-editor" onclick="update()" panel="html"></div>
						</section>

						<section id="css-panel" open="1" class="section-editor" panel="css">
							<a href="#!" onclick="panelToggle(this)" panel="css"><theboxes boxing="" mob="" class="middle padding-s-hzt">
								<box col="10" mob="" class=""><inner class="">
									<p class="padding-s size-s b7 upper cl-white">css</p>
								</inner></box>
								<box col="2" mob="" class=""><inner class="t-right">
									<span class="typcn typcn-minus cl-white toggle-sign" panel="css"></span>
								</inner></box>
							</theboxes></a>
							<div id="css-editor" onclick="update()" panel="css"></div>
						</section>

						<section id="js-panel" open="1" class="section-editor" panel="js">
							<a href="#!" onclick="panelToggle(this)" panel="js"><theboxes boxing="" mob="" class="middle padding-s-hzt">
								<box col="10" mob="" class=""><inner class="">
									<p class="padding-s size-s b7 upper cl-white">js</p>
								</inner></box>
								<box col="2" mob="" class=""><inner class="t-right">
									<span class="typcn typcn-minus cl-white toggle-sign" panel="js"></span>
								</inner></box>
							</theboxes></a>
							<div id="js-editor" onclick="update()" panel="js"></div>
						</section>

					</div>
				</inner></box>	

			</theboxes>
		</div>
	</section>
	<script src="editor.js?v=<?=time()?>"></script>
</body>
<?php get_footer() ?>
