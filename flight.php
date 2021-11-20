<html>
<head>
<title>flight</title>
<h1><center><u>Flight Search</u></center></h1>
<style>
body{
    background-image:url("airports.jpg");
	background-repeat:no-repeat;
}
</style>
</head>
<body align="center">
<form method="post" action="flightsearch.php">
<table align="center" border="0">

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
<input type="text" name="to" size="5">
</tr>
<td>
<b>Child(2-11 yrs)</b>
</td>
<td>
<input type="text" name="to" size="5">
</tr>
<td>
<b>Infant(0-2 yrs)</b>
</td>
<td>
<input type="text" name="to" size="5">
</tr>
<tr>
<td ><input type="submit" value="Search Flight"  align="center"></td>
</tr>
<tr>
<td><b><input type="reset" value="reset" align="center"></b></td>
</tr>
</table>
</form>
</body>
</html>
