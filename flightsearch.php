<html>
<body>
<table border="2" align="center" cellspacing="1" cellpadding="8" style="font-size:18;font-family:Comic Sans MS;">
   <tr>
      <th>airline name</th>
      <th>origin</th>
      <th>destination</th>
      <th>type</th>
	  <th>duration</th>
	  <th>fair</th>
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

$result = mysqli_query($conn,"SELECT airlinename,origin,destination,type,duration,fair FROM flights WHERE origin='$fname' AND destination='$tname'");
if($result) 
{
    while($row=mysqli_fetch_row($result)) 
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
<h1><center><u>Flight Booking</u></center></h1>

<body align="center" style="background-image:url(search37.jpg);background-size:100%;">
<form method="post" action="bookf.php">
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
<b>Airline name:</b>
</td>
<td>
<input type="text" name="airline" size="25" placeholder="airline name">
</td>
</tr>
<tr>
<td>
<b>From:</b>
</td>
<td>
<input type="text" name="from" size="25" placeholder="origin city">
</td>
</tr>
<tr>
<td>
<b>To:</b>
</td>
<td>
<input type="text" name="to" size="25" placeholder="destination city">

</td>
</tr>
<tr>
<td>
<b>Depart</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>

</td>
</tr>
<tr>
<td>
<b>Return</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>
</td>
</tr>
<tr>
<td>
<b>Adult(12+ yrs)</b>
</td>
<td>
<input type="text" name="adult" size="5">
</tr>
<td>
<b>Child(2-11 yrs)</b>
</td>
<td>
<input type="text" name="child" size="5">
</td>
</tr>
<tr>
<td>
<b>Infant(0-2 yrs)</b>
</td>
<td>
<input type="text" name="infant" size="5">
</td>
</tr>
<tr>
<td ><input type="submit" value="Book Flight"  align="center"></td>
</tr>
</table>
</form>
<a href="mounika.php" style="font-size:20px;font-family:arial;align:center;color:black;">home</a>
</body>
</html>
