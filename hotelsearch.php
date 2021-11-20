<html>
<body>
<table border="2" align="center" cellspacing="1" cellpadding="8" style="font-size:18;font-family:Comic Sans MS;">
   <tr>
      <th>hotel name</th>
      <th>city name</th>
      <th>state name</th>
      <th>type</th>
	  <th>rooms</th>
	  <th>fair</th>
    </tr>
<?php
$cname=$_POST["cityname"];
$servername="localhost";
$username="root";
$password="";
$my_db="online tourism management";

// Create connection
$conn=new mysqli($servername,$username,$password,$my_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT hotelname,cityname,statename,type,rooms,fair FROM hotels WHERE cityname='$cname'";
$result = $conn->query($sql);
        
if ($result->num_rows > 0) {
    // output data of each row
    while($row =mysqli_fetch_row($result)) 
	{
       echo '<tr>',
              '<td>',$row[0],'</td>',
              '<td>',$row[1],'</td>',
              '<td>',$row[2],'</td>',
              '<td>',$row[3],'</td>',
              '<td>',$row[4],'</td>',
              '<td>',$row[5],'</td>', 
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
<h2><center><u>Hotel Booking</u></center></h2>
<body align="center" style="background-image:url(search1.jpg);background-size:100%;">
<form method="post" action="bookh.php">
<table align="center" border="0" style="font-size:15">
<td>
<b>UserName:</b>
</td>
<td>
<input type="text" name="username" size="25" placeholder="Username">
</td>
</tr>
<td>
<b>hotelname:</b>
</td>
<td>
<input type="text" name="hotelname" size="25" placeholder="hotel name">
</td>
</tr>
<tr>
<td>
<b>cityname:</b>
</td>
<td>
<input type="text" name="cityname" size="25" placeholder="city name">

</td>
</tr>
<tr>
<td>
<b>type:</b>
</td>
<td>
<input type="text" name="type" size="25" placeholder="type">
</td>
</tr>
<tr>
<td>
<b>rooms:</b>
</td>
<td>
<input type="text" name="rooms" size="25" placeholder="Number of Rooms">

</td>
</tr>
<tr>
<td>
<b>fair:</b>
</td>
<td>
<input type="text" name="fair" size="25" placeholder="cost">

</td>
</tr>
<tr>
<td>
<b>Check In</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>

</td>
</tr>
<tr>
<td>
<b>Check Out</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>
</td>
</tr>

<tr>
<td ><input type="submit" value="Book hotel"  align="center"></td>
</tr>
</table>
</form>
<a href="mounika.php" style="font-size:20px;font-family:arial;align:center;">home</a>
</body>
</html>
 