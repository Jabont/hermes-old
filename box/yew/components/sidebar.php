<?php
	$sidebar = '
	<div class="container-fluid">
		<div class="row">
			<div class="col-2" id="sidebar">
				<nav class="nav flex-column center">
					<div class="row">
						<div class="col-1 icon">
							<span class="typcn typcn-stopwatch"></span>
						</div>
						<div class="col-6 icon">
                            <a class="nav-link" href="#">Time</a>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-1 icon">
							<span class="typcn typcn-user"></span>
						</div>
						<div class="col-6 icon">
							<a class="nav-link" href="#">Profile</a>
						</div>
					</div>

					<div class="row">
						<div class="col-1">
							<span class="typcn typcn-globe"></span>
						</div>
						<div class="col-6">
							<a class="nav-link" href="#">Showcase</a>
						</div>
					</div>

					<div class="row">
						<div class="col-1">
							<span class="typcn typcn-chart-pie"></span>
						</div>
						<div class="col-6">
							<a class="nav-link" href="#">Classroom</a>
						</div>
					</div>

				</nav>
			</div>
			<div class="col-10">

			</div>
		</div>
	</div>';

	$sidebar_style = '
	<style>
	.icon {

	}

	p {
		color: white;
	}

	#sidebar {

		min-height: calc(100vh - 60px);
		background: #111111;
	}

	hr {
		border: 2px solid #E3E3E3;
  		border-radius: 5px;
	}
	</style>';
?>