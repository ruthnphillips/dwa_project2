<?php

require('helper.php');

$handoutsJson = file_get_contents('handouts.json');

$handouts = json_decode($handoutsJson, true);
#dump($handouts);

# Retrieve data from the form
if (isset($_GET['program']))
{
    $program = $_GET['program'];
	echo($program);

	$semester = $_GET['semester'];
	echo($semester);

	$email = $_GET['email'];
	echo ($email);

}
else
{
    $program = '';
}
