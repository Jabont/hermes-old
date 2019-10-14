<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "classroom";
include('function.php');
include('components/default.php');

$class_id = $_GET['id'];
$pass = confect("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
if (!$pass) {
		header("Location: classroomEnrollment.php?id=".$class_id);
	}
$classroom_name = "Multimedia";
get_header("Classroom - ".$classroom_name);
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<?php include('components/part_classroom.php'); ?>

	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>