<?php

require('helper.php');

$sheltersJson = file_get_contents('shelters.json');

$shelters = json_decode($sheltersJson, true);
#dump($shelters);

$spaceAvailable = 'no';
$requestedGuests = 1;
$petRequested = 'no';
$vacancy = 0;

# Retrieve data from the form
if (isset($_GET['pets']))
{
	$petRequested = $_GET['pets'];
}

if (isset($_GET['guests']))
{
    $requestedGuests = $_GET['guests'];
}
else
{
    $requestedGuests = '';
}

if (isset($_GET['email']))
{
    $email = $_GET['email'];
}

# return all shelters if no guests are entered
if ($requestedGuests == '')
{
	return $shelters;
}

# search for available shelter
foreach ($shelters as $name => $shelter)
{

	# check to see if there is vacancy at the shelter
	$vacancy = $shelter['maxOccupancy'] - $shelter['currentGuests'];

	if($vacancy >= $requestedGuests)
	{
		$spaceAvailable = 'yes';

		# Check for pet space availability
		if($petRequested == 'yes')
		{
			if($shelter['petsAllowed'] == false)
			{
				$spaceAvailable = 'no';
				unset($shelters[$name]);
			}
		}
	}
	else
	{
		unset($shelters[$name]);
	}
}

#send the results to email provided
$msg = "Number of shelters available = ";
$msg .= count($shelters);
$msg .= "\n";
$msg .= $name;
mail($email,"Shelter availability",$msg);

dump($shelters);
