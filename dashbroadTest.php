<?php  

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A Little Hermes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #000000;" justify-content-between">
      <div onclick="window.location.href='index.php'">
	  <img src="src/Logo_new.svg" class="logo-bar">
	  <a class="navbar-brand" style="color: #FFCF40; font-family: Roboto;">AIRMES</a><h7 style="color: #FFFFFF; font-family: Roboto;">By IT KMITL</h7>
      </div>
	  <form class="form-inline">
        <span class="typcn typcn-zoom "style="color: #FFCF40;"></span>
	    <input class="form-control mr-sm-2" style="color: #FFCF40; font-family: Roboto;" type="search" placeholder="Search Wing!" aria-label="Search">
        <!-- <div class="profile">
            <img src="https://via.placeholder.com/30">
        </div> -->
        <button class="sign-in"><a href="it.kmitl.ac.th/~hermes/logout.php">Logout</a></button>
	  </form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2" id="sidebar">
				<nav class="nav flex-column center">
					<div class="row">
						<div class="col-1 icon"><span class="typcn typcn-stopwatch"></span></div>
						<div class="col-6 icon"><a class="nav-link" href="#"><span id="time-counting"></span></a></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-1"><span class="typcn typcn-user"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Profile</a></div>
					</div>
					<div class="row">
						<div class="col-1"><span class="typcn typcn-globe"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Showcase</a></div>
					</div>
					<div class="row">
						<div class="col-1"><span class="typcn typcn-chart-pie"></span></div>
						<div class="col-6"><a class="nav-link" href="#">Classroom</a></div>
					</div>
				</nav>
			</div>
			<div class="col-10 content-bg">
				<div class="row">
					<div class="col"><h1>My Wings</h1></div>
					<div class="col text-right"><P>VIEW MORE WINGS</p></div>
				</div>
				<hr class="underText">
				<h2>You haven't created any Wings yet. :(</h2>
				<div class="container_">
					<div class="nowing-box">
						
						<img class="wingImg" src="src/Logo_new.svg">
						<br>
						<button class="create" onclick="window.location.href='editor.php'">Create Your Wing</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
	setInterval (function () {
		let date = new Date();
		document.querySelector("#time-counting").innerText = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
	}, 1000);
</script>

<style scoped>
	img {
		color: #939191;
	}
	h2 {
		text-align: center;
	}

	.nowing-box {
		width: 196;
	}
	.create {
		color:#E5E5E5;
		position: relative;
		width:196px;
		height:35px;
		background-color: #FF00AA;
		border: 0;
		font-family: 'Roboto', sans-serif;
		font-weight: bold;
	    cursor: pointer; 
	}
	.wingImg {
		border-radius: 0%;
		width: 196px;
		height: 196px;
	}
	h2 {
		color: #939191;
	}
	.container_ {
		display: flex;
		justify-content: center;
	}
	h1, p {
		padding-top: 10px;
		font-family: 'Roboto', serif;
		color: white;
	}
	.content-bg {
		background: #1A1A1A;
	}
	.underText {
		border: 2px solid #00D5FF;
  		border-radius: 5px;
	}
	#sidebar {
		min-height: calc(100vh - 56px);
		background: #111111;
	}
	hr {
		border: 2px solid #E3E3E3;
  		border-radius: 5px;
	}
</style>

<style type="text/css">
@charset 'UTF-8';
/* @FONT-FACE loads font into browser */
img{
    border-radius: 50%;
}
@font-face {
  font-family: 'typicons';
  src: url('font/typicons.eot');
  src: url('font/typicons.eot?#iefix') format('embedded-opentype'),
       url('font/typicons.woff') format('woff'),
       url('font/typicons.ttf') format('truetype'),
       url('font/typicons.svg#typicons') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* :before psuedo-selector inserts and styles icon */
.typcn:before {
  color: #939191;
  font-size: 30px;
  font-family: 'typicons';
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  height: 1em;
  font-size: 1.875em;
  text-align: center;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
</style>
<style type="text/css">
/* Code for individual icons */

.typcn-stopwatch:before { content: '\e10c'; } /* '' */
.typcn-calendar-outline:before { content: '\e038'; } /* '' */
.typcn-calendar:before { content: '\e039'; } /* '' */
.typcn-chart-pie-outline:before { content: '\e044'; } /* '' */
.typcn-chart-pie:before { content: '\e045'; } /* '' */
.typcn-pin-outline:before { content: '\e0c8'; } /* '' */
.typcn-pin:before { content: '\e0c9'; } /* '' */
.typcn-globe-outline:before { content: '\e080'; } /* '' */
.typcn-globe:before { content: '\e081'; } /* '' */
.typcn-user-add-outline:before { content: '\e127'; } /* '' */
.typcn-user-add:before { content: '\e128'; } /* '' */
.typcn-user-delete-outline:before { content: '\e129'; } /* '' */
.typcn-user-delete:before { content: '\e12a'; } /* '' */
.typcn-user-outline:before { content: '\e12b'; } /* '' */
.typcn-user:before { content: '\e12c'; } /* '' */
.typcn-zoom:before { content: '\e14f'; } /* '' */

</style>