<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "analytics";
include('function.php');
include('components/default.php');


$classroom_name = "Multimedia";
get_header("Classroom - ".$classroom_name);
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<?php include('components/part_analytics.php'); ?>
	
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>