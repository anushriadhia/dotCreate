<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dotCreate</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="logout.css">

    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
	<div class="container"> 
	 
	    <h2 id="hero_header">dotCREATE</h2>
	    <button type="button" id="login"><a href="login.php" style="color:#00AC76; text-decoration: none;">LOGIN</a></button>
	    <button type="button" id="login"><a href="index.html" style="color:#00AC76; text-decoration: none;">HOME</a></button>
	    <h1 id="tagline">create<br>better<br>together</h1>

		<div class="front">

			<?php
				session_start();
				session_destroy();
				if(isset($_COOKIE['user']) && isset($COOKIE['password'])){
					$user = $_COOKIE['user'];
				    $password = $_COOKIE['password'];
					setcookie('user', $user, time()-1);
					setcookie('pass', $Password, time()-1);
				}
				echo "<div class='logout'>You successfully have logged out!</div>";
			?>
		</div>
	</div>
</body>
</html>