<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "dashboard";
include('function.php');
include('components/default.php');



get_header("Classroom");
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<main>
		<section>
			<div class="cont-pd">
				<sp class="l desktop-only"></sp>
				<h1 class="upper underline bd-ci1">Classroom</h1>
				<theboxes boxing="2" mob="2" class=" spacing-l -gap lack">
				<?php
				$conn = conn();
				$sql = "SELECT class_main.id, class_main.name, class_main.description, class_main.cover_url, user.username FROM class_main INNER JOIN user WHERE class_main.owner_id = user.id ORDER BY class_main.id";
				if($result = $conn->query($sql)) {
					while ($row = $result->fetch_assoc()) {
					 ?>
						<box>
							<inner class="bg-black shadow">
								<div class="bg-cover padding-l-vtc" style="background-image: url(<?php echo $row['cover_url']; ?>);">
									<h2 class="cont-pd t-center"><a href="classroomEnrollment.php?id=<?php echo $row['id'] ?>" class="cl-yellow ">
										<?php echo $row['name']; ?>
									</a></h2>
									<sp class="m"></sp>
									<h5 class="cont-pd cl-white t-center">
										<?php echo $row['username']; ?>
									</h5>
								</div>
								<p class="padding cl-white">
									<?php echo $row['description']; ?>
								</p>
								<sp class="l"></sp><sp class="vl"></sp>
							</inner>
						</box>
					<?php
					}
				}
				?>
				</theboxes>
			</div>
		</section>
	</main>
	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>