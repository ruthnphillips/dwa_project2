<?php require('getShelter.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Shelter Availability</title>
	<meta charset='utf-8'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div class="container">

		<h1> <a href="/"> Shelter Availability</a></h1>

		<form method='GET'>

			<!-- drop menu to select number of people requesting space at shelter -->
			<div class="row">
				<div class="col-sm-12 option-large">
					<h2>How many people in your party</h2>
					<select class="form-control input-lg" name = "guests">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					</select>
				</div>
			</div>

			<!-- radio button to select if pets are included -->
			<div class="row">
				<div class="col-sm-12 form-group">
					<h2>Any Pets ?</h2>
					<label class="radio-inline"><input type="radio" name="pets" value="yes"> Yes</label>
					<label class="radio-inline"><input type="radio" name="pets" value="no"> No</label>
				</div>
			</div>

			<!-- email input to enter email address -->
			<div class="row">
				<div class="col-sm-12 form-group">
					<h2>Enter your email</h2>
					<input type='email' class='form-control' id='inputEmail' name='email'>
				</div>
			</div>


				<!-- submit button -->
				 <input type='submit' class='btn btn-primary btn-small' value='Search Availability'>

		</form>
	</div>
</body>
</html>
