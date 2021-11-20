<html>
<head>
<title>Explore India</title>
<link rel="stylesheet" href="page.css" type="text/css"/>
<style type="text/css">
#m{
position:absolute;
right:0px;
width:99.02%;
height:100px;
top:120px;
left:30px;
z-index:2;
}
#j
{
position:absolute;
text-align:left;
word-spacing:1px;
top:0px;
left:100px;
font-family:AR CENA;
font-size:40px;
color:#255117;
z-index:1;
}
#s
{
position:absolute;
top:200px;
left:0px;
}
#ab
{
 position:absolute;
 top:50px;
 left:1000px;
 font-size:25px;
 font-family:magneto;
}
#ac
{
 position:absolute;
 top:50px;
 left:1100px;
 font-size:25px;
 font-family:magneto;
}
.dropbtn {
    color: blue;  
    padding: 0px;
    font-size: 25px;
	background-color:white;
	font-family:AR CENA;
	font-weight:bold;
	text-decoration:underline;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: white;
}

.dropdown {
    position: relative;
    display: inline-block;
	background-color:white;
	top:0px;
	left:15px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: white}

.show {display:block;}
</style>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</head>
<body>
<div style="width:100%; height:30%">
<div style="float:left; width:20%;">
<p>
<img src="p1.jpg" width="75px" height="95px" left="600px"/>
</p>
</div>
<div style="float:right; width:60%; margin-left:10px;">
<p id="j"><b>Welcome To</b>
</p>
<p><h1>Travel Guide Of India</h1>
</p>
<a href="login.php" id="ab" >Login</a>
<a href="sign.php" id="ac">SignUp</a>
</div>
</div>
<div id="m">
<table align="left" id="g" cellpadding="20" cellspacing="20">
<th><a href="home.php" name="first">Home</a></th>
<th>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">About India</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="history.html">History</a>
    <a href="culture.html">Culture</a>
    <a href="religion.html">Religion</a>
  </div>
</div>
</th>
<th><a href="travelex21.php">Travel</a></th>
<th><a href="hotel.php">Hotels</a></th>
<th><a href="train.php">Trains</a></th>
<th><a href="bus.php">Buses</a></th>
<th><a href="flight.php">Flights</a></th>
<th><a href="feedback.php">Feedback</a></th>
<th><a href="profile.php">search profile</a></th>
<th><a href="report.php">reports</a></th>
</table>
</div>
<div id="s"> 
<img src="image6.jpg" width="1500px" height="380px"/> 
</div>
<div class="fadein" align="center">
    
	
	<img id="f1" src="must.jpg" width="100%" height="380px"/>
	 <img id="f2" src="agra.jpg" width="100%" height="380px"/>
     <img id="f3" src="golden.jpg" width="100%" height="380px"/>
	<img id="f4" src="Neil.jpg" width="100%" height="380px"/>
	
	<img id="f5" src="image5.jpg" width="100%" height="380px"/>
	<img id="f6" src="beach.jpg" width="100%" height="380px"/>
	<img id="f7" src="kerala.jpg" width="100%" height="380px"/>
   
    
</div> 
</body>
</html>
 

