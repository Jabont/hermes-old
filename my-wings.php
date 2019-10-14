<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status'] == 0) {
	header('location: login.php');
}

$page = "your_wings";
include('function.php');
include('components/default.php');

get_header("Dashboard");
?>

<body class="page-sidebar">
	<?php get_component('sidebar-opening','{"page":"'.$page.'"}');?>
	<main class="cont-pd inner padding-rm-vtc">
		<sp class="l"></sp>
		<h1 class="upper underline bd-ci-blue ">wings</h1>
		<sp class="s"></sp>
		<form>
			<input type="text" name="" placeholder="Search Wing!" id="search_wing" class="bd-ci-blue underline">
		</form>
		<sp class="l"></sp>
		<theboxes boxing="" mob="" class="top spacing -clip">
			
			<!-- Card -->
			<?php
			$conn = conn();
			$sql = "SELECT * FROM wing WHERE owner_id=".$_SESSION['uid'];
			$response = $conn->query($sql);
			while ($row = $response->fetch_assoc()) { ?>
				<box col="3" style="cursor: pointer;"><inner class="bg-blue">
				<a <?php 
					$accs_id = $row['access_id'];
					echo " href='./editor.php#$accs_id'";?>>
				<iframe class='display_wing' frameborder='0' scrolling='no' style='pointer-events: none;' src=<?php echo "'/box/ice/render.php?key=$accs_id'"; ?>></iframe>
				<div class="padding">
					<theboxes class="spacing -clip">
					<box col="3"><img class="wide circle" src=https://via.placeholder.com/36></box>
					<box col="9" class="">
						<p class="wingname"><?php echo $row['wing_name']; ?></p>
						<p class="owner" style="color: #F7F7F7; font-size: 0.8em"><?php echo $_SESSION['username']; ?></p>
						<p class="views">#<?php echo $row['access_id']; ?></p>
					</box>
					<box col="12"><inner>
						<theboxes class="spacing -clip">
							<box col="4" class="views"><inner>
								<span class="typcn size-l typcn-eye-outline"></span> 1
							</inner></box>
							<box col="4" class="commend"><inner>
								<span class="typcn size-l typcn-message"></span> 1
							</inner></box>
							<box col="4" class="liked"><inner>
								<span class="typcn size-l typcn-heart-outline"></span> 1
							</inner></box>
						</theboxes>
					</inner></box>
				</theboxes>
				</div>
				</a>
			</box>
			<?php } ?>
		</theboxes>
	</main>

<script type="text/javascript">
	//setTimeout(function(){
		// location.href =location.href
	//},1000)
</script>

	<?php get_component('sidebar-closing','{"page":"'.$page.'"}');?>
</body>
<?php get_footer() ?>