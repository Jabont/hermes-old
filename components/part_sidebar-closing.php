</aside>
<script>
	// Toggle Menu
	toggle_menu_status = 0;
	function toggle_menu(){
		toggle_menu_status = 1-toggle_menu_status;
		document.getElementById('side-nav').setAttribute('active',toggle_menu_status);
	}
</script>