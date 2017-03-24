<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class=" lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

<?php /* Din pacate timpul nu-mi permite sa fac detectarea corecta; utilizez $_SERVER['HTTP_USER_AGENT'] pt a vedea daca vizita este
	facuta de pe mobil sau desktop pt a decide de fisier css livrez
 */ ?>

	<link href="css/style.css" rel="stylesheet">

	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=0.5">
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="js/script.js"></script>
</head>

<body>

	<p class='error'>Completati corect toate campurile formularului</p>

	<form role="form" action="procesare.php" method="POST" enctype="multipart/form-data">

		<h3>Personal Details</h3>

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name = "name" class="form-control" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" name = "email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="picture">Picture</label>
			<input type="file" name="pic" id="picture">
		</div>

		<h3>Skills</h3>

		<div class="form-group">
			<label for="html_skill">HTML</label>
			<input type="text" name = "html" value="5">
		</div>
		<div class="form-group">
			<label for="css_skill">CSS</label>
			<input type="text" name = "css" value="5">
		</div>
		<div class="form-group">
			<label for="php_skill">PHP</label>
			<input type="text" name = "php" value="5">
		</div>
		<div class="form-group">
			<label for="js_skill">JS</label>
			<input type="text" name = "js" value="5" >
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>

	<script src="js/script.js"></script>
</body>
</html>
