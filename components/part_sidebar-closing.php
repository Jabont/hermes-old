
</aside>
<script>
	// Toggle Menu
	let toggle_menu_status = 0;
	const sideNav = document.getElementById('side-nav');
	const sideMain = document.getElementById('side-main');
	function checkBodyNavHeight(){
		let sideNavHeight = sideNav.offsetHeight;
		let bodyHeight = document.body.offsetHeight;
		let windowHeight = window.innerHeight;
		let pageY = window.pageYOffset;

		if (windowHeight <= sideNavHeight) {
			let dist = sideNavHeight - windowHeight;
			if (pageY >= dist) {
				sideNav.style.top = `-${dist}px`;
			}
			else{
				sideNav.style.top = `-${pageY}px`;
			}
		}
	}
	// Check sidebar nav when scroll
	window.addEventListener("scroll", function(){checkBodyNavHeight()});

	function toggle_menu(){
		toggle_menu_status = 1-toggle_menu_status;
		sideNav.setAttribute('active',toggle_menu_status);
		sideMain.setAttribute('active',toggle_menu_status);
	}
</script>