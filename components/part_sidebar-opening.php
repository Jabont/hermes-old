
	<aside id="side-nav" class="padding-rm-hzt b7" active="0">
		<sp class="m desktop-only"></sp>
		<sp class="m"></sp>
		<div class="mobile-only t-right">
			<span class="typcn typcn-times size-vl" onclick="toggle_menu()"></span>
		</div>
		<?php include('part_sidebar.php') ?>
		<sp class="l"></sp>
		<sp class="xl mobile-only"></sp>
		<sp class="xl mobile-only"></sp>
	</aside>
	<aside id="side-blank" class="desktop-only bg-red"></aside>
	<aside id="side-main" active="0">
		<aside id="side-nav-mob" class="mobile-only padding shadow">
			
			<theboxes class="middle">
				<box mob="10" class=""><inner class="t-left v-middle-wrap">
					<img src="<?=$logo_url?>" class="logo x32">
					<h3 class="cl-ci1 inline-block"><?php echo $GLOBALS['site_name']?></h3>
				</inner></box>
				<box mob="2" class=""><inner class="t-right">
					<span class="typcn typcn-equals size-vl" onclick="toggle_menu()"></span>
				</inner></box>
			</theboxes>
			
		</aside>