<?php
	if (!empty($_POST["name"]) && !empty($_POST["email"])&& isset($_POST["submit"])){
		$to      = 'jmorra@hotmail.com';
		$subject = 'message from ' . $_POST["name"];
		$message = $_POST["name"] . " wrote the following: \n" 
		. $_POST["comment"] . "\n This person can be reached at " . $_POST["email"];
		$headers = 'From: ' . $_POST["name"] . "\r\n" .
			'Reply-To: jacobmorra.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		$cond = true;
	}
	else if ((empty($_POST["name"]))&& !empty($_POST["email"])&& isset($_POST["submit"])){
		$cond1 = true;
	}
	else if (!empty($_POST["name"]) && (empty($_POST["email"]))&& isset($_POST["submit"])){
		$cond2 = true;
	}
	else if (empty($_POST["name"]) && (empty($_POST["email"]))&& isset($_POST["submit"])){
		unset($_POST["submit"]);
		$cond3 = true;		
	}
?>
