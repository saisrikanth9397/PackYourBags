<html>
<body>
<table border="2" align="center" cellspacing="1" cellpadding="8" style="font-size:18;font-family:Comic Sans MS;">
   <tr>
      <th>train name</th>
      <th>origin</th>
      <th>destination</th>
    </tr>
<?php
$fname=$_POST["origin"];
$tname=$_POST["destination"];
$servername="localhost";
$username="root";
$password="";
$my_db="online tourism management";

$conn=mysqli_connect($servername,$username,$password,$my_db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,"SELECT trainname,origin,destination FROM trains WHERE origin='$fname' AND destination='$tname'");
if($result) 
{
    while($row=mysqli_fetch_row($result)) 
	{
         echo '<tr>',
              '<td>',$row[0],'</td>',
              '<td>',$row[1],'</td>',
              '<td>',$row[2],'</td>',
            '</tr>';
    }
}
 else
{
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
<br>
<h1><center><u>Train Booking</u></center></h1>


<body align="center" style="background-image:url(search36.jpg);background-size:100%;">
<form method="post" action="bookt.php">
<table align="center" border="0">
<tr>
<td>
<b>UserName:</b>
</td>
<td>
<input type="text" name="username" size="25" placeholder="Username">
</td>
</tr>
<tr>
<td>
<b>Train Name:</b>
</td>
<td>
<input type="text" name="trainname" size="25" placeholder="trainname">
</td>
</tr>
<tr>
<td>
<b>From:</b>
</td>
<td>
<input type="text" name="origin" size="25" placeholder="origin city">
</td>
</tr>
<tr>
<td>
<b>To:</b>
</td>
<td>
<input type="text" name="destination" size="25" placeholder="destination city">
</td>
</tr>
<tr>
<td>
<b>Number of seats:</b>
</td>
<td>
<input type="text" name="seats" size="25" placeholder="number of seats">
</td>
</tr>
<tr>
<td ><input type="submit" value="Book train"  align="center"></td>
</tr>
</table>
</form>
<a href="mounika.php" style="font-size:20px;font-family:arial;align:center;color:black;">home</a>
</body>
</html>
