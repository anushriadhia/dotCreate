<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <script type="text/javascript" src="login.js"></script>
    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
  <div class="container"> 
 
    <h2 id="hero_header">dotCREATE</h2>
    <button type="button" id="login"><a href="login.php" style="color:#00AC76; text-decoration: none">LOGIN</a></button>
    <button type="button" id="login"><a href="index.html" style="color:#00AC76; text-decoration: none;">HOME</a></button>
    <h1 id="tagline">create<br>better<br>together</h1>
    <div class="front">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; position: absolute; top: 50%; left: 70%; transform: translate(-50%, -50%); text-align: center;">Login</button>
      <div id="id01" class="modal">  
        <form class="modal-content animate" method="post" action="login_process.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img_avatar3.png" alt="Avatar" class="avatar" style="width:30%">
          </div>

          <div class="containers" style="width: auto">
              <label style="color: #FFFFFF; font-weight: lighter; text-shadow: 0px 0px 20px #00AC76;"><b>Username</b></label>
              <p><input type="text" placeholder="Enter Username" id="user" name="user" required></p>

              <label style="color: #FFFFFF; font-weight: lighter; text-shadow: 0px 0px 20px #00AC76;"><b>Password</b></label>
              <p><input type="password" placeholder="Enter Password" id="password" name="password" required><p>
                
              <p><button type="submit" name="login" style="width:70%">Login</button></p>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            <p>
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </p>
              <span class="psw" style="float: center; font-weight: lighter; text-shadow: 0px 0px 20px #00AC76;">
                <a href="forgotpassword.php" style="color:#FFFFFF; text-decoration: none;">Forgot password?</a>
              </span>
          </div>
        </form>
      </div>
      <div>
          <a href="insertForm.php" style = "position: absolute; top: 58%; left: 70%; text-decoration:none; 
          transform: translate(-50%, -50%); text-align: center; color:#FFFFFF; font-weight: lighter; 
          text-shadow: 0px 0px 20px #00AC76;">New users click here to make account</a>
      </div>
    </div>
  </div>

<?php
  if(isset($_COOKIE['user']) && isset($COOKIE['password'])){
    $user = $_COOKIE['user'];
    $password = $_COOKIE['password'];
    echo "<script>
      document.getElementById('user').value = '$user';
      document.getElementById('password').value = '$password';
    </script>";
  }

?>

</body>
</html>
