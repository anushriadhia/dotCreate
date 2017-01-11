<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="forgotpassword.css">
	<link href="postlogin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
        session_start();
    ?>
	<div class="container"> 
 
	    <h2 id="hero_header">dotCREATE</h2>
	    <button type="button" id="back" onclick="window.location.href='postlogin.php'">Home</button>
	    <h1 id="tagline">create<br>better<br>together</h1>

		    <div class="front">
		    	<div class = "form" style="	top: 50%; left: 70%;">
			    	<p>Please enter a new password that you would like:</p>
					<form action="changepassword.php" method="post"> 
						<input type="password" name="pass"><br />
						<p>Please re-enter your new password:</p>
						<input type="password" name="re_pass"><br />
						<input type="submit" name="submit">
					</form>
				</div>
			</div>
	</div>
    <?php
	    if(isset($_POST['submit'])){
			$db = "dotCreate";
			$con = mysql_connect('localhost', 'root', '');  
			if (!$con) {  
		    	die('Not connected : ' . mysql_error());  
			} 

			mysql_select_db($db, $con);

			$pass = $_POST['pass'];
			$re_pass = $_POST['re_pass'];

			if($pass == $re_pass){
				mysql_query("UPDATE User SET Password = '" . $pass . "' WHERE Username = '" . $_SESSION['user'] . "'");

				echo "<div class = 'notification' style='top: 68%; left: 70%;'>Congratulations! You have successfully changed your password!</div>";
			} else{
				echo "<div class = 'notification' style='top: 68%; left: 70%;'>Your passwords did not match, please try again.<div>";
			}
		}

    ?>