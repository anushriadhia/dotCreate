<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="postlogin.css" rel="stylesheet" type="text/css">
<script src="jquery.js"></script>
    <script src="projects.js"></script>
    <script src="getAllProjectsView.js"></script>
   
    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
    </head>
<body>
    <?php
        session_start();
    ?>
    <div class="container">


        <h2 id="hero_header">dotCREATE</h2>
        <?php
            echo "<div id='logout'><a href='logout.php' style='color: #00AC76; text-decoration: none;'>Logout</a></div>";
        ?>
        <button type="button" id="login" onclick="window.location.href='newproject.php'">Create New Project</button>
       
        <button type="button" id="back" onclick="window.location.href='changepassword.php'">Change Your Password</button>
        
        <button type="button" id="back" onclick="window.location.href='postlogin.php'">Home</button>
        
        <div class="welcomeProj">All Projects Available</div>
       
        <div class="projectContainer" style="margin-top:15vh">
        
        </div>
   
  
    


</div>
</body>
</html>
