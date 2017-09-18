<!--<?php require('getHandout.php'); ?> -->

<!DOCTYPE html>
<html>

<head>
	<title>Handout Diner</title>
	<meta charset='utf-8'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<h1> <a href'/'> Handout Diner </a></h1>

	<form method='GET'>

		<div class="form-group">
			<!-- drop menu to select program -->
			<h4>Select your program</h4>
			<select class="form-control" name = "program">
			  <option value="Computer Science">Computer Science</option>
			  <option value="Law">Law</option>
			  <option value="Business Administration">Business Administration</option>
			</select>
		</div>

		<div class="form-group">
			<!-- radio button to select semester -->
			<h4>Select your semester</h4>
			<label class="radio-inline"><input type="radio" name="semester"> Fall</label>
			<label class="radio-inline"><input type="radio" name="semester"> Spring</label>
		</div>

		<div class="form-group">
			<!-- email input to enter email address -->
			<h4>Enter your email</h4>
			<input type='email' class='form-control' id='inputEmail' name='email'>
		</div>

			<!-- submit button -->
			 <input type='submit' class='btn btn-primary btn-small' value='email Handout'>

	</form>
	
</body>
</html>
