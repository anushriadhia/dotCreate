<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="insertForm.css">
</head>
<body>
	<div class="container"> 
 
	    <h2 id="hero_header">dotCREATE</h2>
	    <button type="button" id="login"><a href="login.php" style="color:#00AC76; text-decoration: none;">LOGIN</a></button>
	    <button type="button" id="login"><a href="index.html" style="color:#00AC76; text-decoration: none;">HOME</a></button>
	    <h1 id="tagline">create<br>better<br>together</h1>

	    <div class="front">
		    <div class = "form" style="	top: 50%; left: 70%;">
		    	<form action="insertForm.php" method="post"> 
					Username: <input type="text" name="user" required><br />
					Password: <input type="password" name="pass" required><br />
					Email: <input type="text" name="email" required><br />
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

			$sql = "INSERT INTO User (Username, Password, Email) VALUES ('$_POST[user]', '$_POST[pass]', '$_POST[email]')";

			$result = mysql_query($sql,$con);
			if($result){
				echo "<div class='form' style='top: 50%; left: 70%;'><form>Succesfully created your account! Click here to
				 <a href='login.php'>login</a></form></div>";
			}
			else {
				echo "<div class='form' style='top: 50%; left: 70%;'><form>The username or email is already taken, please using a different 
				<a href='insertForm.php'>one.</a></form></div>";
			}

			mysql_close($con);
		}

	?>
</body>
</html>