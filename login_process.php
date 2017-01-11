<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dotCreate</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="process.css">


    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
	<div class="container"> 
	    <h2 id="hero_header">dotCREATE</h2>
	    <button type="button" id="login"><a href="login.php" style="color:#00AC76; text-decoration: none;">LOGIN</a></button>
	    <button type="button" id="login"><a href="index.html" style="color:#00AC76; text-decoration: none;">HOME</a></button>
	    <h1 id="tagline">create<br>better<br>together</h1>
	</div>
	<?php
		if(isset($_POST['login'])){
			$db = "dotCreate";
				$con = mysql_connect('localhost', 'root', '');  
				if (!$con) {  
			    	die('Not connected : ' . mysql_error());  
				} 

			mysql_select_db($db, $con);

			$user = $_POST['user'];
			$password = $_POST['password'];

			$result = mysql_query("SELECT * FROM User WHERE Username = '$user'")
						or die("Failed to query my database " . mysql_error());
			$row = mysql_fetch_array($result, MYSQL_ASSOC);

			if($row['Username'] == $user && $row['Password'] == $password){
				//keeps session active for 7 days
				if(isset($_POST['remember'])){
					$id = $row['ID'];
					setcookie('user', $user, time()+60*60*7);
					setcookie('pass', $password, time()+60*60*7);
					setcookie('id', $id, time()+60*60*7);
				}
				session_start();
				$_SESSION['user'] = $user;
				$_SESSION['id'] = $id;
				header("location: postlogin.php");
			} else{
				echo "<div class='side'>Incorrect Username or Password. <br> Click 
				<a href='login.php' style='color: #00AC76'>here</a> to try again.<div>";
			}
		} else{
			header("location: login.php");
		}
	?>
</body>
</html>