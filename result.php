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

		<h1> <a href="index.php"> Shelter Availability</a></h1>

		<?php foreach ($shelters as $name => $shelter) : ?>
			<div>
				<h2><?=$name?></h2>
				<ul>
					<li>Maximum Occupancy: <?=$shelter['maxOccupancy']?></li>
					<li>Persons currentlty in shelter: <?=$shelter['currentGuests']?></li>
					<li>Pets Allowed: <?=$shelter['petsAllowed']?></li>
				</ul>
			</div>
		<?php endforeach; ?>

	</div>
</body>
</html>
