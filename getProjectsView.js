
$(document).ready(function () {
    
    var user= $('.projectContainer').attr('id');
    var newUser;
    var div;
    
     $.ajax("getProjects.php/"+ user,
           {type: "GET",
		    dataType: "json",
		    success: function(username) {
                if(username){
                    newUser = new User(username[0]);
                    
                    $.ajax("getProjects.php/" + user+"/"+newUser.id,
           {type: "GET",
		    dataType: "json",
		    success: function(projects) {
                 
		       for (var i=0; i<projects.length; i++) {
			     var p= new Project(projects[i]);
                   makeNewProjectDiv(p,newUser);
		       }
		     },
            
                error: function(a,b,c) {
                    alert("LKDSJFLSDKJF");
                }
	       }
    );
                }
               
		     },
            
                error: function(a,b,c) {
                    alert("userError");
                }
	       }
    );

    
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