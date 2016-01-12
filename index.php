<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel='stylesheet' href='css/style.css'/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico&effect=anaglyph">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php
	if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = $email; 
	$to = 'jmorra@hotmail.com'; 
	$subject = 'Message from jacobmorra.com';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		if (!$_POST['message']) {
			$errMessage = 'Please enter provide a message';
		}
		// If there are no errors, send the email
		if (!$errName && !$errEmail & !$errMessage) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thanks! I have received your message and will reply as soon as I can.</div>';
			} else {
				$result='<div class="alert alert-danger">Something went wrong. Please ensure that you provide a name, email, and message.</div>';
			}
		}
		}
?>
    <div class="jumbotron">
        <h1 class="title"> Jacob Morra </p>
    </div>
    
    <div class="slider">
        <div class="slide1">
            <div class="redbox">
			<?php
			include "send.php";
			if ($cond){
				echo "<div class=innerBoxbc>";
				echo "<p> Thank you " . $_POST["name"] . ", your message has been sent. </p>";
				echo "</div>";
			}
			else if ($cond1){
				echo "<div class=innerBoxbc>";
				echo "<p> Please enter a name. </p>";
				echo "</div>";
			}
			else if ($cond2){
				echo "<div class=innerBoxbc>";
				echo "<p> Please enter an email. </p>";
				echo "</div>";
			}
			else if ($cond3){
				echo "<div class=innerBoxbc>";
				echo "<p> Please enter a name and an email. </p>";
				echo "</div>";
			}
			?>
            </div>
        </div>
        <div class="slide2 active-slide">
            <div class="bluebox">
				<div class="innerBoxab">
					<div class ="innerBoxaba" style="background-color: #0000FF; color: white">
						<p>I am an undergraduate Software Engineering student in the Electrical, Computer, and Software Engineering Department
						at University of Ontario Institute of Technology (UOIT). I am also a TA for Calculus II this semester.</p>
					</div>
<!--					<div class ="innerBoxaba">
						<p> I am interested in building software for web applications, video games, embedded systems, and robotics/automated systems.</p>
					</div>
-->
					<div class ="innerBoxaba" style="background-color: #0099FF">
						<p> I recently (in December) created a web-based shopping cart with user and cart functionality (incorporating PHP, 
						MySQL, HTML/CSS/Bootstrap, and XML). Some other languages/tools which I use: <b>Java</b>, JavaScript/jQuery, and C++ </p>
					</div>
					<div class ="innerBoxaba" style="background-color: #00FFFF">
						<p> Currently, I am working on a side project with the Raspberry Pi 2 (and camera) whereby I run Python scripts in a Linux shell 
						to track moving objects on camera. An email will be sent from the Pi whenever movement is detected.</p> 
					</div>
				</div>
            </div>
        </div>
        
        <div class="slide3">
            <div class="greenbox">
                This is my My Work page.
            </div>
        </div>
        <div class="slide4">
            <div class="yellowbox">
				<div class="innerBox">
					<!----------------------------------------------------------------------------------------->
					<fieldset>
					<legend class="message1" style="color:white"> To contact me, please fill out and submit the form below: </legend>
					<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label" style="color:white">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name"  value="">
						<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>	
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label" style="color:white">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email"  value="">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label" style="color:white">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-info btn-med">
						</div>
					</div>
					<!--
					<div class="form-group">
						<img src="captchaimg.php" /> <br><br>
						<p style="color: green">Copy text above: <input type="text" name="captcha"/></p>
					</div>
					-->
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							 <?php echo $result; ?> 
						</div>
					</div>
				</form>
				</fieldset>
				<!----------------------------------------------------------------------------------------->

					<!--<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<fieldset>
					<legend class="message1"> To contact me, please fill out and submit the form below: </legend>
					<table class="message">
						<tr>
							<td>Your Name: * </td>
							<td class="innerBox1"> <input type="text" name = "name"> </td>
						</tr>
						<tr>
							<td>Email Address: * </td>
							<td class="innerBox1"> <input type="text" name = "email"></td>
						</tr>
						<tr>
							<td>Leave a message: </td>
							<td class="innerBox1"><textarea name="comment" cols="25" rows="4"></textarea></td>
						</tr>
						<tr>
							<td> </td>
							<td class="innerBox2"><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
					</fieldset>
					</form>
					-->
				</div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=img/hello.PNG>
                <h3 class="ab"><a href=#>About Me</a></h3>
            </div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=img/github.png>
                <h3 class="my"><a href=https://github.com/jacobmorra target="_blank">My GitHub</a></h3>
            </div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=img/contact.png>
                <h3 class="co"><a href=#>Contact</a></h3>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>