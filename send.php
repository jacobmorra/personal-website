<?php
	if (isset($_POST["submit"])){
		$to      = 'jmorra@hotmail.com';
		$subject = 'the subject';
		$message = 'hello';
		$headers = 'From: jacobmorra.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	}
?>
