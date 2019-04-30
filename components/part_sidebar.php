<div class="t-center">
	<img src="<?php echo $GLOBALS['logo_url']?>" class="logo x64">
	<sp class="s"></sp>
	<h2 class="cl-ci1 inline-block lh-0"><?php echo $GLOBALS['site_name']?></h2>
	<span class="cl-white b5 block size-m">by IT KMITL</span>
	<sp></sp>
	<div>
		<span class="typcn h8 typcn-time"></span>
		<span id="time-counting" class="size-m">--:--:--</span>
	</div>
</div>
<sp class="l"></sp>
<a href="editor.php" title="" class="btn wide t-center no-round btn-blue"><!-- <span class="typcn typcn-plus size-l b5"></span>  --><span>New Wing</span></a>

<sp class="vl"></sp>
<ul class="roboto capital">
	<li><a href="dashboard.php"><span class="typcn h8 typcn-home-outline"></span> dashboard</a></li>
</ul>
<sp class=""></sp>
<h4 class="cl-ci-blue upper">Wings</h4>
<ul class="roboto capital">	
	<li><a href="my-wings.php"><span class="typcn h8 typcn-feather"></span> my wings</a></li>
	<li><a href=""><span class="typcn h8 typcn-document-text"></span> my works</a></li>

</ul>
<sp class=""></sp>
<h4 class="cl-ci-purple upper">Classroom</h4>
<ul class="roboto capital">
	<li><a href=""><span class="typcn h8 typcn-folder-open"></span> All</a></li>
	<li><a href=""><span class="typcn h8 typcn-business-card"></span> Enrolled</a></li>
	
	<li><a href=""><span class="typcn h8 typcn-archive"></span> manager</a></li>
	<li><a href=""><span class="typcn h8 typcn-pencil"></span> create new</a></li>
	

</ul>
<sp class=""></sp>
<h4 class="cl-ci-pink upper">Profile</h4>
<ul class="roboto capital">
	<li><a href=""><span class="typcn h8 typcn-heart-outline"></span> loved</a></li>
	<li><a href=""><span class="typcn h8 typcn-user-outline"></span> profile</a></li>
	<li><a href=""><span class="typcn h8 typcn-cog-outline"></span> settings</a></li>
	<li><a href="logout.php"><span class="typcn h8 typcn-export-outline"></span> log out</a></li>
</ul>

<sp class="xl"></sp>
<h4 class="cl-ci1 upper">Hermes</h4>
<ul class="roboto capital">
	<li><a href="">Statistics</a></li>
	<li><a href="">About</a></li>
</ul>
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