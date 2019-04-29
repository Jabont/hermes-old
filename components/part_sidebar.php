<div class="t-center">
	<img src="<?=$logo_url?>" class="logo x64">
	<sp class="s"></sp>
	<h2 class="cl-ci1 inline-block lh-0"><?php echo $GLOBALS['site_name']?></h2>
	<span class="cl-white roboto b5 block size-m">by IT KMITL</span>
	<span id="time-counting" class="size-m"></span>
</div>
<sp class="l"></sp>
<a href="editor.php" title="" class="btn wide t-center no-round btn-blue ffont"><!-- <span class="typcn typcn-plus size-l b5"></span>  --><span>New Wing</span></a>

<sp class="vl"></sp>
<h4 class="cl-ci-blue">Wings</h4>
<ul class="roboto capital">
	<li><a href=""><span class="typcn size-l typcn-feather"></span> your wings</a></li>
	<li><a href=""><span class="typcn size-l typcn-document-text"></span> Your assignments</a></li>
	<li><a href=""><span class="typcn size-l typcn-heart-outline"></span> loved</a></li>

</ul>
<sp class=""></sp>
<h4 class="cl-ci-purple">Classroom</h4>
<ul class="roboto capital">
	<li><a href=""><span class="typcn size-l typcn-book"></span> Enrolled</a></li>
	<li><a href=""><span class="typcn size-l typcn-folder-open"></span> Opening</a></li>
	<li><a href=""><span class="typcn size-l typcn-tabs-outline"></span> your classroom</a></li>
	<li><a href=""><span class="typcn size-l typcn-pencil"></span> new classroom</a></li>

</ul>
<sp class=""></sp>
<h4 class="cl-ci-pink">Profile</h4>
<ul class="roboto capital">
	<li><a href=""><span class="typcn size-l typcn-user-outline"></span> Your profile</a></li>
	<li><a href=""><span class="typcn size-l typcn-cog-outline"></span> settings</a></li>
	<li><a href="logout.php"><span class="typcn size-l typcn-export-outline"></span> log out</a></li>
</ul>

<sp class="xl"></sp>
<h4 class="cl-ci1">Hermes</h4>
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