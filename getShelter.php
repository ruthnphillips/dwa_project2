<?php

require('Form.php');
require('helper.php');

use DWA\Form;

$form = new Form($_GET);

$sheltersJson = file_get_contents('shelters.json');
$shelters = json_decode($sheltersJson, true);

$spaceAvailable = 'no';
$vacancy = 0;

	# Retrieve data from the form
if($form->isSubmitted())
{
	# by default guests have no pets
	$petRequested = $form->get('pets', 'no');

	#by default only 1 guest slot is requested
	$requestedGuests = $form->get('guests', 1);

	$email = $form->get('email', '');

	# validate email entry
	$errors = $form->validate([	'email' => 'required|email']);

	if(empty($errors))
	{
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
					if(strcmp($shelter['petsAllowed'], "no") == false)
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

		# verify if any shelters were found
		if(count($shelters)>0)
		{
			$shelterFound = true;
		}
		else
		{
			$shelterFound = false;
		}
	}

}
