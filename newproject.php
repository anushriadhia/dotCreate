<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>create new project</title>
<link href="newproject.css" rel="stylesheet" type="text/css">
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
  <?php
    session_start();
  ?>
<div class="container">


    <h2 id="hero_header">dotCREATE</h2>
    <button type="button" id="back" onclick="window.location.href='postlogin.php'">Home</button>


    <div class="welcome">Create a New Project</div>
    <div class="title">
    <form action="newproject.php" method="post"><br>
        <input type="text" name="title" title:"Title of project" style= "color:#888;"
        value="Insert Project Title" onfocus="inputFocus(this)" onblur="inputBlur(this)" required><br>
<!--     </form> -->
</div>


    <div class="rectangleone">
    <div class="names">
      <div class="category">Choose the category of the project:</div>
<!--     <form> -->
      <input id="1" type="radio" name="type" value="video" required>
        <label for="1"> Video</label><br>
      <input id="2" type="radio" name="type" value="visual art">
        <label for="2">Visual Art</label><br>
      <input id="3" type="radio" name="type" value="website">
        <label for="3">Website</label><br>
      <input id="4" type="radio" name="type" value="performing art">
      <label for="4"> Performing Art</label><br>
<!--     </form> -->
    </div>


  <div class=description>Description of Project:
    <div class="block">
    <!-- <form> --><br>
        <input type="text" name="description" title:"des" style= "color:#888;"
        value="Insert Project Description" onfocus="inputFocus(this)" onblur="inputBlur(this)" required><br>
    <!-- </form> -->
  </div>
  </div>


  <div class="members">Number of Members Needed:
    <div class="numberOfMembers">
      <!-- <form> --></br>
        <input type="text" name="members" required></br>
      <!-- </form> -->
    </div>
  </div>

  <div class="expiration">Expiration Date:
    <div class="datebox">
    <input type="date" name="term" id="myDate" style= "color:#888;" style="font-family:inherit;"
    data-date-format="Y-m-d" required>
    <input type="submit" name="submit" value="save" id="save">
    </div>
  </div>
</form>
</div>
  <?php
    date_default_timezone_set('America/New_York');
    if(isset($_POST['submit'])){
      $db = "dotCreate";
      $con = mysql_connect('localhost', 'root', '');  
      if (!$con) {  
          die('Not connected : ' . mysql_error());  
      } 

      mysql_select_db($db, $con);

      $now = date('Y-m-d');

      $sql = "INSERT INTO Project (Title, Description, Type, DateAdded, UserID, TermDate, MembersNeeded) 
      VALUES ('$_POST[title]', '$_POST[description]', '$_POST[type]', '$now', '$_SESSION[id]', '$_POST[term]', '$_POST[members]')";

      $result = mysql_query($sql,$con);
      if($result){
        echo "<div class='form' style='top: 50%; left: 70%;'>Succesfully created your project!";
      }
      else {
        echo "<div class='form' style='top: 50%; left: 70%;'>Please fill out the whole form before 
        you press submit.</div>";
      }

      mysql_close($con);
    }
  ?>
</body>
</html>