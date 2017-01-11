<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="forgotpassword.css">
</head>
<body>
	<div class="container"> 
 
	    <h2 id="hero_header">dotCREATE</h2>
	    <button type="button" id="login"><a href="login.php" style="color:#00AC76; text-decoration: none">LOGIN</a></button>
	    <button type="button" id="login"><a href="index.html" style="color:#00AC76; text-decoration: none;">HOME</a></button>
	    <h1 id="tagline">create<br>better<br>together</h1>

		    <div class="front">
		    	<div class = "form" style="	top: 50%; left: 70%;">
			    	<p>Please insert your email address below:</p>
					<form action="forgotpassword.php" method="post"> 
						<input type="text" name="email"><br />
						<input type="submit" name="submit">
					</form>
				</div>
			</div>
	</div>

	<?php
	// we need to check to see if the submit button was pressed and to do this we use isset
		if(isset($_POST['submit'])){
			$db = "dotCreate";
			$con = mysql_connect('localhost', 'root', '');  
			if (!$con) {  
		    	die('Not connected : ' . mysql_error());  
			} 

			mysql_select_db($db, $con);

			$email = $_POST['email'];

			//check if email exists
			$email_check = mysql_query("SELECT * FROM User U WHERE U.Email = '" . $email . "'");
			$count = mysql_num_rows($email_check);

			//generate a new password
			if($count != 0){
				function generateRandomString($length = 10) {
    				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    				$charactersLength = strlen($characters);
    				$randomString = '';
    				for ($i = 0; $i < $length; $i++) {
        				$randomString .= $characters[rand(0, $charactersLength - 1)];
    				}
    				return $randomString;
				}
				$new_password = generateRandomString();

				//update the database
				mysql_query("UPDATE User SET Password = '" . $new_password . "' WHERE Email = '" . $email . "'");

				//send password to the user
				$subject = "Login Information";
				$message = "Dear Customer, \n\n Your new password is $new_password! Please do not reply to this email. 
				\n\n dotCreate";
				$from = "From: noreply@dotCreate.com";

				mail($email, $subject, $message, $from);

				echo "<div class = 'notification' style='top: 68%; left: 70%;'>Your new password has been emailed to you!</div>";
			}
			 else{
			 	echo "<div class = 'notification' style='top: 68%; left: 70%;'>This email does not exist or 
			 	you did not sign up for an account with this email.<div>";
			 }

			mysql_close($con);
		}

	?>
</body>
</html>