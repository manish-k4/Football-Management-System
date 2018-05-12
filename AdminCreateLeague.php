<?php?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}
.btn-group button {
    background-color: #4CAF50; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #7e4e41;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: center;
    background: white;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 25%;
}

/* Right column */
.rightcolumn {
    float: right;
    width: 75%;
    background-color: #f1f1f1;
    padding-left: 20px;
}



/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: panel-default;
    clear: both;
}

#sideBarStyle ul {
    
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

#sideBarStyle li a {
    
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

ul, li 
{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

ul#sideBarStyle li a:hover,ul#sideBarStyle li.active a
{
   background-color: #4CAF50;
   color: white;

}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
.topnav a {
	float: none;
	width: 100%;
}


/*<li>
          <section class="box search">
            <form method="post" action="#">
              <input type="text" class="text" name="search" placeholder="Search" />
            </form>
          </section>
        </li>*/


}
</style>
</head>
<body>

 


<div class="header">
  <h1>Football Management System</h1>
</div>

<div class="topnav">
  <a href="Admin'sMainPage.html">Home </a>
  <a href="EditProfile.html">Settings</a>


  <a href="#" style="float:right">Search</a>

  <input type ="text" placeholder="Search..." style ="float:right">

</div>

<div class="row">
  <div class ="rightcolumn">
  <h2>Admin Page</h2>

        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="btn-group">
              <a href="AdminCreateLeague.html" target="_self">
              <button>Create League</button>
              </a>
              <a href="AdminCreateClub.html" target="_self">
              <button>Create Club</button>
              </a>
              <a href="AdminCreateAccount.html" target="_self">
              <button>Create Account</button>
              </a>
              <a href="AdminCreateGame.html" target="_self">
              <button>Create Game</button>
              </a>
          </div>
          </div>
          <div class="panel-body">
            <form role="form" action="#" method="POST">
              <fieldset>
                <div class="row">
                  
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span>
                         <strong>  Name:     </strong>
                        <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                        
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="input-group">
                        <strong>  Start Date:     </strong>
                        <form action="/action_page.php">
                        <input type="date" name="startdate">           
                     </form>
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <strong> End Date:</strong>
                        <form action="/action_page.php">
                        <input type="date" name="enddate">           
                     </form>
                    </div>
                    </div>
                    
                    <select>
                     <option value="Player">Azerbeycan</option>
                     <option value="Coach">Tukey</option>
                     <option value="Fan">Tacikistan</option>
                    </select>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Done">
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
                </div>
      </div>
  
</div>
 
  <div class="leftcolumn">
	<!--<div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>-->
    

    	 <ul id="sideBarStyle">
        <li><a class="active" href="CountriesPage.html">Countries</a></li>
         <li><a href="LeagueTablePage.html">League</a></li>
         <li><a href="ClubsPage.html">Clubs</a></li>
         <li><a href="TransferNewsPage.html">Transfer News</a></li>
         <li><a href="GuestPage.html">Matches</a></li>
         <li><a href="playersPage.html">Players</a></li>
       </ul>


  </div>



 

</body>
</html>