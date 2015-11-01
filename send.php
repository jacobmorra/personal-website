<?php
	if (isset($_POST["email"]) && isset($_POST["submit"])){
		$to      = 'jmorra@hotmail.com';
		$subject = 'message from ' . $_POST["name"];
		$message = $_POST["comment"];
		$headers = 'From: jacobmorra.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		
		echo "Thank you " . $_POST["name"] . ", your message has been sent.";
	}
	
?>
