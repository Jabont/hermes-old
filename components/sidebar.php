<div class="container-fluid">
	<div class="row">
		<div class="col-2" id="sidebar">
			<nav class="nav flex-column center">
				<div class="row">
					<div class="col-1 icon">
						<span class="typcn typcn-stopwatch"></span>
					</div>
					<div class="col-6 icon">
                        <a class="nav-link" href="#"><span id="time-counting"></span></a>
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
	</div>
</div>
<script>
	function paddingTextNumber(num) {
		if (num.length == 1) return "0" + num;
		else return num;
	}
	
	setInterval (function () {
		let date = new Date();
		document.querySelector("#time-counting").innerText = `${paddingTextNumber(date.getHours())}:${paddingTextNumber(date.getMinutes())}:${paddingTextNumber(date.getSeconds())}`;
	}, 1000);
</script>
