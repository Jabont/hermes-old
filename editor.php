<?php
	session_start();
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $CONFIG['titlename'] ?></title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">
	  	<img src="src/Logo_new.svg">
	  	Hermes
	  </a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" onclick="window.location.href='dashboard.php'">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <!-- <li class="nav-item">
	        <a class="nav-link" >Something</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" >Something</a>
	      </li> -->
	    </ul>
	    <button class="btn btn-success my-2" type="" onclick="save()">Save</button>
	    <button class="btn btn-success my-2" type="" onclick="preview()">Preview</button>
	    <button class="btn btn-danger" type="" onclick="autorun()" id="autorun">AutoRun</button>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="container-fluid hold-editor" style="background: #111111">
				<div class="row">
					<div class="col-4" style="text-align: center; color: white;">
						<p class="text">HTML</p>
						<div class="editor" id="htmlEditor"></div>
					</div>
					<div class="col-4" style="text-align: center; color: white;">
						<p class="text">CSS</p>
						<div class="editor" id="cssEditor"></div>
					</div>
					<div class="col-4" style="text-align: center; color: white;">
						<p class="text">Javascript</p>
						<div class="editor" id="jsEditor"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<iframe id="result" frameborder="0" src="about:blank"></iframe>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ace.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ext-language_tools.js"></script>
	<script src="editor.min.js"></script>

</body>
</html>

<style scoped>
        .text {
                padding-top: 5px;
                padding-bottom: 2px;
        }
	.hold-editor {
		height:40vh;
	}
	img {
		width: 36px;
		height: 36px;
	}
	.nav-link {
		cursor: pointer;
	}
	.btn {
		margin: 2px;
	}
	.editor {
		height: 30vh;
	}
	#result {
		width: 100%;
		height: 49.4vh;
	}
</style>