<?php require('getHandout.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Handout Diner</title>
	<meta charset='utf-8'>

</head>
<body>

	<?php echo "Handout";?>

	<form method='GET' action='getHandout.php'>

		<!-- drop menu to select program -->
		<select>
		  <option value="computerScience">Computer Science</option>
		  <option value="law">Law</option>
		  <option value="businessAdmin">Business Administration</option>
		</select>
		
		<!-- radio button to select semester -->
		<input type="radio" name="semester" value="fall"> Fall
  		<input type="radio" name="semester" value="spring"> Spring

		<!-- text input to enter student ID -->
		<label>Student ID:
			<input type='text' id='studentID' name='studentID'>
		</label>
		<!-- submit button -->
		 <input type='submit' value='Search'>

	</form>
</body>
</html>
