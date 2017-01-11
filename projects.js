
var Project = function(project_json) {
    this.id = project_json.ID;
    this.title = project_json.Title;
    this.description = project_json.Description;
    this.type = project_json.Type;
    this.dateAdded = project_json.DateAdded;
    this.membersNeeded = project_json.MembersNeeded;
    this.terminationDate = project_json.TerminationDate;
    this.userID= project_json.UserID;
    
    
};

var User= function(user_json){
    this.id = user_json.ID;
    this.username= user_json.Username;
    this.password= user_json.Password;
    this.email= user_json.Email;
};

var makeNewProjectDiv = function(project, user) {
    
    
    
    var breakBox=$("<br>");
    var authorSpan= $("<span id='green'></span");
    var typeSpan= $("<span id='green'></span");
    var descriptionSpan= $("<span id='green'></span");
    var membersNeededSpan= $("<span id='green'></span");
    var dateSpan= $("<span id='green'></span");
    
    
    var cdiv = $("<div class='projectDiv'></div>");
    var box= $("<h2 style='margin-left:10px'></h2>");
    box.html(project.title);
    cdiv.append(box);
    cdiv.append(breakBox);
    
    var author= $("<span></span>");
    author.addClass('content');
    authorSpan.html("Creator: ");
    author.html( user.username+"<br>");
    authorSpan.append(author);
    author.append(breakBox);
    cdiv.append(authorSpan);
     cdiv.append(breakBox);
    
    var div= $("<span></span>");
    div.addClass('content');
    typeSpan.html("Type: ");
    div.html(  project.type+"<br>");
    typeSpan.append(div);
    div.append(breakBox);
    cdiv.append(typeSpan);
     cdiv.append(breakBox);

    
    var div1= $("<span></span>");
    div1.addClass('content');
    descriptionSpan.html("Description: ");
    div1.html(project.description+"<br>");
    descriptionSpan.append(div1);
    div1.append(breakBox);
    cdiv.append(descriptionSpan);
     cdiv.append(breakBox);
    
    
    
     var div2= $("<span></span>");
    div2.addClass('content');
    membersNeededSpan.html("Members Needed: ");
    div2.html(project.membersNeeded+"<br>");
    membersNeededSpan.append(div2);
    div2.append(breakBox);
    cdiv.append(membersNeededSpan);
     cdiv.append(breakBox);
    
    
     var div3= $("<span></span>");
    div3.addClass('content');
    dateSpan.html("Project Dates: ");
    div3.html( project.dateAdded + " - " + project.terminationDate+"<br>");
    dateSpan.append(div3);
     div3.append(breakBox);
    cdiv.append(dateSpan);
     cdiv.append(breakBox);

    return cdiv;
};
