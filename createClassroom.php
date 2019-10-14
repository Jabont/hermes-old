<?php
session_start();

if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "dashboard";
include('function.php');
include('components/default.php');

get_header("Create Classroom");

if ($_SESSION['role'] != 999) { // role ที่สามารถสร้าง classroom ได้?>
	<body class="page-sidebar">
		<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
		<main class="cont-pd inner padding-rm-vtc">
			<sp class="l desktop-only"></sp>
			<h1 class="upper bd-ci1">ระดับคุณยังไม่ถึง</h1>
		</main>
		<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
	</body>
<?php } else { ?>
<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<main class="cont-pd inner padding-rm-vtc">
		<sp class="l desktop-only"></sp>
		<h1 class="upper underline bd-ci1">Create Classroom</h1>
		<sp class="vl"></sp><sp class="vl"></sp><sp class="vl"></sp>
		<section id="main" class="thescreen v-middle-flex">
			<div class="inner cont-pd">
				<theboxes boxing="" mob="" class="spacing -clip">
					<box col="4"></box>
					<box col="4" mob="" class=""><inner class="">
						<form method="POST">
							<label>
								<h3 class="cl-purple">Name</h3>
								<sp class="m"></sp>
								<input type="text" name="name_classroom" class="input-box" placeholder="Name" required="required">
							</label>
							<sp class=""></sp>
							<label>
								<h3 class="cl-purple">Description</h3>
								<sp class="m"></sp>
								<textarea type="description" name="description" class="input-box bg-white cl-black" placeholder="  Description" required="required"></textarea>
							</label>
							<sp class=""></sp>
							<label>
								<h3 class="cl-purple">Set Enrollkey</h3>
								<sp class="m"></sp>
								<input type="text" name="pass_enroll" class="input-box" placeholder="passcode" required="required">
							</label>
							<sp class=""></sp>
							<label>
								<h3 class="cl-purple">Cover Picture</h3>
								<sp class="m"></sp>
								<input type="url" name="cover" class="input-box" placeholder="URL">
							</label>
							<sp class="vl"></sp>
							<button type="submit" value="create_classroom" name="form" class="no-round wide capital btn btn-blue padding size-l">Create</button>
						</form>
						<?php
							if (sizeof($_POST) > 0) {
								$data = $_POST;
								if ($data['form'] == 'name_classroom') {
									$name = $data['name_classroom'];
									$description = $data['description'];
									$pass_enroll = $data['pass_enroll'];
									$owner_id = $_SESSION['uid'];
									$cover = $data['cover'];
									$sql = "INSERT INTO class_main(name,description,owner_id,pass_enroll,cover_url) VALUES('$name','$description', '$owner_id', '$pass_enroll','$cover')";
									$con = con();
									mysqli_query($con, $sql);
									die("<script> window.location.href = 'allClassroom.php'; </script>");
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

<?php } ?>