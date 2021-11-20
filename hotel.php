<html>
<head>
<title>hotel</title>
<h1><center><b><u>Find Hotel</b></u></center></h1>
<style>
body{
    background-image:url("eliteescape.jpg");
	background-repeat:no-repeat;
	background-size:100%;
}
</style>
</head>
<body>
<form method="post" action="hotelsearch.php">
<table align="center" border="0">
<tr>
<td>
<b>Enter City</b>
</td>
<td>
<input type="text" name="cityname" size="25" placeholder="city name">
</td>
</tr>
<tr>
<td>
<b>Check In:</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>

</td>
</tr>
<tr>
<td>
<b>Check Out:</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>

</td>
</tr>
<tr>
<td>
<b>Rooms:</b>
</td>
<td>
<input type="text" name="room" size="5">
</td>
</tr>
<tr>
<td ><input type="submit" value="Search" align="center"></td>
</tr>
<tr>
<td><input type="reset" value="reset" align="center"></td>
</tr>
</table>
</form>
</body>
</html>