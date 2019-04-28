<?php?>

<!DOCTYPE html>
<html>
<head>
	<title>Airmes webEditor</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.editor {
			height: 35vh;
		}
		#result {
			width: 100%;
			height: 55.5vh;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	  	<img src="https://via.placeholder.com/36">
	  	Airmes
	  </a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Something</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Something</a>
	      </li>
	    </ul>
	    <button class="btn btn-outline-success my-2 my-sm-0" type="">Login</button>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-4 editor" id="htmlEditor"></div>
			<div class="col-4 editor" id="cssEditor"></div>
			<div class="col-4 editor" id="jsEditor"></div>
		</div>
		<div class="row">
			<iframe id="result" frameborder="0" src="about:blank"></iframe>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ace.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.3/ext-language_tools.js"></script>
	<script src="script.js"></script>

</body>
</html>
