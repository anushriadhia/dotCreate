
$(document).ready(function () {
    
    var user;
    var newUser;
    var div;
    var p;
    var cdiv;
    var user1;
    
     $.ajax("getAllProjects.php/",
           {type: "GET",
		    dataType: "json",
		    success: function(projects) {
                
                 for (var i=0; i<projects.length; i++) {
                   
			      p= new Project(projects[i]);
                     getUser(p);
                     
                     
                     
                    } 
                    
                    
                
               
		     },
            
                error: function(a,b,c) {
                    alert("userError");
                }
	       }
    );
    

    
var getUser= function (project){
    var userID= project.userID;
    var returnUser;
    $.ajax("getAllProjects.php/"+userID,
           {type: "GET",
		    dataType: "json",
		    success: function(users) {
                
              if(users[0]!=undefined){
                newUser= new User(users[0]);
                  cdiv= makeNewProjectDiv(project, newUser);
                  $('.projectContainer').append(cdiv);
              }  
                    
                    
                
               
		     },
            
                error: function(a,b,c) {
                    alert("userError");
                }
	       }
    );
   
    
}
    
//    $.ajax("connected.php/" + userID,
//           {type: "GET",
//		    dataType: "json",
//		    success: function(projects) {
//                 
//		       for (var i=0; i<projects.length; i++) {
//			     var p= new Project(projects[i]);
//                   makeNewProjectDiv(p,newUser);
//		       }
//		     },
//            
//                error: function(a,b,c) {
//                    alert("LKDSJFLSDKJF");
//                }
//	       }
//    );

    





});