<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "classroom";
include('function.php');
include('components/default.php');


$classroom_name = "Multimedia";
get_header("Classroom - ".$classroom_name);
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<div class="bg-cover bg-fixed cover-wrap underline bd-ci-purple" style="background-image:var(--cover-gd-color),url('http://whatsonmyblackboard.files.wordpress.com/2015/06/20150630_19074022.jpg')">
		<div class="cont-pd inner">
			<theboxes class="t-center wide">
				<p class="upper cover-lead size-s">classroom</p>
				<a href="#!"><h1 class="h4"><?=$classroom_name?></h1></a>
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
					<span class="padding-hzt"><span class="typcn h8 typcn-book"></span> 2 units</span> | 
					<span class="padding-hzt"><span class="typcn h8 typcn-briefcase"></span> 5 works</span> | 
					<span class="padding-hzt"><span class="typcn h8 typcn-feather"></span> 139 wings</span> |
					<span class="padding-hzt"><span class="typcn h8 typcn-group-outline"></span> 273 members</span>
				</h3>
				<sp></sp>
			</div>
		</div>
	</div>
	<main class="cont-pd inner padding-rm-vtc">
		<sp class=""></sp>
		<section id="annoucement" class="padding-l-vtc">
			<div class="t-shadow cover-caption">
				<h2 class="upper cl-ci-purple">annoucement</h2>
				<sp class=""></sp>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
				<sp class="s"></sp>
				<div>
					— <a href="#!" class="">@Jabont</a>
				</div>
			</div>
		</section>
		<section id="unit-1" class="unit-wrap padding-l-vtc">
			<sp class="l"></sp>
			<h2 class="underline bd-ci3"><span class="cl-ci-purple">Unit 1 — </span>CSS Selector</h2>
			<sp class="s"></sp>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			<sp class=""></sp>
			<ul class="b7 padding-l-hzt">
				<li><a href="#!"><span class="typcn h8 typcn-feather"></span> — 1. What is CSS classes</a></li>
				<li><a href="#!"><span class="typcn h8 typcn-feather"></span> — 2. CSS attribute - how to use it</a></li>
				<li><a href="#!"><span class="typcn h8 typcn-document-text"></span> — 3. Let's make a name card</a></li>
			</ul>
		</section>
		<section id="unit-2" class="unit-wrap padding-l-vtc">
			<sp class="l"></sp>
			<h2 class="underline bd-ci3"><span class="cl-ci-purple">Unit 2 — </span>Hierarchy of css rules</h2>
			<sp class="s"></sp>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			<sp class=""></sp>
			<ul class="b7 padding-l-hzt">
				<li><a href="#!"><span class="typcn h8 typcn-document-text"></span> — 1. Change HTML for CSS</a></li>
				<li><a href="#!"><span class="typcn h8 typcn-stopwatch"></span> — 2. Fix the error</a></li>
			</ul>
		</section>
		<section id="tips" class="padding-l-vtc">
			<sp class="l"></sp>
			<h3 class="underline bd-ci-purple-2 capital">tips</h3>
			<sp class=""></sp>
			<h4 class="capital cl-ci-purple-2">kind of work</h4>
			<ul class="padding-l-hzt">
				<li>
					<span class="typcn h8 typcn-feather"></span> is <b>Example/Excercise Wings</b> — You can fork it and edits whaterver you want. There have no credits score.
				</li>
				<li>
					<span class="typcn h8 typcn-document-text"></span> is <b>Assigment</b> — You have to do this work. There have credits score and limited time. Fork are not available. You can save until time out. 
				</li>
				<li>
					<span class="typcn h8 typcn-stopwatch"></span> is <b>Quiz</b> — You have to do this work. There have credits score and limited time. Fork are not available. You can save just 1 time.
				</li>
			</ul>
		</section>
	</main>
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>