<?php

namespace DWA;
require ('helper.php');

/** Define a PHP class called Email in the namespace DWA that contains the following:
* A private property, recipient.
* A public constructor method that accepts 1 parameter, recipient, and sets this parameter to the class property recipient.
* A public method called send that accepts 2 parameters: subject and message. The body of this method should look like this:
* return mail($this->recipient, $subject, $message);
* Here's an example of how this completed Email class would hypothetically be used:
* $email = new DWA\Email('susanbuck@fas.harvard');
* $email->send('This is the subject', 'This is the body');
*/

class Email
{
	private $recipient;

	public function __construct($recipient)
	{
		$this->recipient = $recipient;
	}

	public function send($subject, $message)
	{
		return mail($this->recipient, $subject, $message);
	}
} #eoc
