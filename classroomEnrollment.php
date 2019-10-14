<?php
session_start();

if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "dashboard";
include('function.php');
include('components/default.php');
get_header("Create Classroom");

$class_id = $_GET['id'];

$class = confect("SELECT * FROM class_main WHERE id = ".$class_id.";");
$pass = confect("SELECT * FROM class_enrollment WHERE class_id = ".$class_id." AND user_id = ".$_SESSION['uid'].";");
if ($pass) {
	header("Location: classroom.php?id=".$class_id);
}

?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<main class="cont-pd inner padding-rm-vtc">
		<sp class="l desktop-only"></sp>
		<h1 class="upper underline bd-ci1">Enroll</h1>
		<sp class="vl"></sp><sp class="vl"></sp><sp class="vl"></sp>
		<section id="main" class="thescreen v-middle-flex">
			<div class="inner cont-pd">
				<theboxes boxing="" mob="" class="spacing -clip">
					<box col="4"></box>
					<box col="4" mob="" class=""><inner class="">
						<h1 class="cl-yellow t-center"><?php echo $class[0]['name'] ?></h1>
						<sp class="vl"></sp>
						<form method="POST">
							<label>
								<h3 class="cl-purple">Enroll</h3>
								<sp class="m"></sp>
								<input type="text" name="enrollkey" class="input-box" placeholder="Enrollkey" required="required">
							</label>
							<sp class="vl"></sp>
							<button type="submit" value="Enroll" name="form" class="no-round wide capital btn btn-blue padding size-l">ENROLL</button>
						</form>
						<?php
						    if (sizeof($_POST) > 0) {
								$data = $_POST;
								if ($data['form'] == 'Enroll') {
									$enrollkey = $data['enrollkey'];
									$check = confect("SELECT * FROM class_main WHERE id = '".$class_id."';");
								}
								if ($check[0]['pass_enroll'] == $enrollkey){
									$sql = "INSERT INTO class_enrollment (class_id,user_id) VALUES ('".$class_id."','".$_SESSION['uid']."')";
									con()->query($sql);
									die("<script> window.location.href = 'allClassroom.php'; </script>");
								}
								else {
									echo "ERROR";
								}
							}
					     ?>
					</inner></box>
				</theboxes>
			</div>
		</section>
		<sp class="l"></sp>
	</main>
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>