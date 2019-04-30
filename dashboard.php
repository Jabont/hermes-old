<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "dashboard";
include('function.php');
include('components/default.php');



get_header("Dashboard");
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<main class="cont-pd inner padding-rm-vtc">
		<sp class="l desktop-only"></sp>
		<h1 class="upper underline bd-ci1">dashboard</h1>
		<sp class=""></sp>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt	</p>
		<sp class="l"></sp>		

		<h2 class="capital cl-ci1">popular on hermes</h2>
		รวมวิงที่กำลังเป็นที่นิยมบนเว็บ ทุกคนจะเห็นเหมือนกัน
		<sp class="l"></sp>

		<h2 class="capital cl-ci-blue">my last wings</h2>
		ทางด่วน เข้าวิงล่าสุดที่ตัวเองสร้างไว้
		<sp class="l"></sp>

		<h2 class="capital cl-ci-purple-2">assignments</h2>
		งานที่ยังไม่หมดกำหนดส่ง จากคลาสที่ลงทะเบียนไว้
		<sp class="l"></sp>

		<h2 class="capital cl-ci-purple">classroom</h2>
		ทางด่วนเข้าวิชาที่ลงทะเบียนไว้
		<sp class="l"></sp>

		<h2 class="capital cl-ci-pink">loved</h2>
		ดูวิงที่กดชอบล่าสุด
		<sp class="l"></sp>
	</main>
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>