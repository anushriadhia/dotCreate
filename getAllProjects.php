<?php

			$db = "dotcreate"; 
			$con = mysqli_connect('localhost', 'root', '', "dotcreate"); 
                   



			
		

$path_components = explode('/', $_SERVER['REQUEST_URI']);

// Note that since extra path info starts with '/'
// First element of path_components is always defined and always empty.

if ($_SERVER['REQUEST_METHOD'] == "GET") {
       
 

//if only username is present in path
 if (count($path_components) >= 4 &&
      ($path_components[3] != "")) {

    //
    $user = intval(($path_components[3]));

    
    $currentUser = "SELECT * FROM User WHERE ID ='" . $user . "'";  
    
      
      $userResult = mysqli_query($con,$currentUser);

$s = array();
    
    while($row2= mysqli_fetch_array($userResult))
    {
      $s[]=$row2;
     }

    // Normal lookup.
    // Generate JSON encoding as response
    header("Content-type: application/json");
    print(json_encode($s));
    exit();

  }
    
    $sql = "SELECT * FROM Project";
    

$result =mysqli_query($con,$sql);

	mysqli_close($con);		

  // ID not specified, then must be asking for index
  header("Content-type: application/json");
    
    $r = array();
    
    while($row= mysqli_fetch_array($result))
    {
      $r[]=$row;
     }
    
    
  print(json_encode($r));
  exit();

} else if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $sql = "INSERT INTO Project (Title, Description, TerminationDate, MembersNeeded, Type) VALUES ('new title', 'new description22', ,'5/5/55','10','video')";

			mysqli_query($con,$sql);

			mysqli_close($con);
    
    header("Content-type: application/json");
    print(true);
    exit();
    
}
// If here, none of the above applied and URL could
// not be interpreted with respect to RESTful conventions.

header("HTTP/1.0 400 Bad Request");
print("Did not understand URL");

?>