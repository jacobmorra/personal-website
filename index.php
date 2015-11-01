<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel='stylesheet' href='css/style.css'/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico&effect=anaglyph">
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="jumbotron">
        <h1 class="title"> Jacob Morra </p>
    </div>
    
    <div class="slider">
        <div class="slide1 active-slide">
            <div class="redbox">

            </div>
        </div>
        
        <div class="slide2">
            <div class="bluebox">
                This is my about me page.
				
            </div>
        </div>
        
        <div class="slide3">
            <div class="greenbox">
                This is my My Work page.
            </div>
        </div>
        
        <div class="slide4">
            <div class="yellowbox">
				<div class="innerYellowBox">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<table>
						<tr>
							<td>Your Name * </td>
							<td> <input type="text" name = "name"> </td>
						</tr>
						<tr>
							<td>Email Address * </td>
							<td> <input type="text" name = "email"></td>
						</tr>
						<tr>
							<td>Leave a message </td>
							<td><textarea name="comment" cols="25" rows="4"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Submit"></td>
							<td> </td>
						</tr>
					</table>
					</form>
					<?php
					include "send.php";
					?>
				</div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=http://shackmanlab.org/wp-content/uploads/2013/07/person-placeholder.jpg>
                <h3 class="ab"><a href=#>About Me</a></h3>
            </div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=img/github.png>
                <h3 class="my"><a href=https://github.com/jacobmorra target="_blank">My GitHub</a></h3>
            </div>
            <div class="col-sm-2 text-center">
                <img class="photo" src=https://cdn0.iconfinder.com/data/icons/thin-communication-messaging/57/thin-327_book_contact_profile_user-512.png>
                <h3 class="co"><a href=#>Contact</a></h3>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>
