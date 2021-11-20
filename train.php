<html>
<head>
<title>trains</title>
<h1><center><u>Train Search</u></center></h1>
<style>
#kl{
  
  font-size:20px;
  }
body{
    background-image:url("Farringdon.jpg");
	background-repeat:no-repeat;
	background-size:100%;
}
</style>
</head>
<body>
<form method="post" action="trainsearch.php">
<table align="center" border="0" id="kl">
<tr>
<td>
<b>From:</b>
</td>
<td>
<input type="text" name="origin" size="25"  placeholder="origin city">
</td>
</tr>
<tr>
<td>
<b>To:</b>
</td>
<td>
<input type="text" name="destination" size="25"  placeholder="destination city">

</td>
</tr>
<tr>
<td>
<b>Departure:</b>
</td>
<td>
<script type="text/javascript"
            src="http://www.snaphost.com/jquery/Calendar.aspx?dateFormat=dd/mm/yy"></script>

</td>
</tr>
<tr>
<td width="30" valign="middle"><b>Class:</b></td>
          <td><select name="" onchange="";>
              <option selected="selected" value="">select here</option>
              <option value="AU_61">Sleeper Class/option>
              <option value="AU_61">Third AC</option>
              <option value="AU_61">Second AC</option>
			   <option value="AU_61">First AC</option>
              <option value="AU_61">First Class</option>
              <option value="AU_61">Third AC Economy</option>
            </select></td>
</tr>
<tr>
<td ><input type="submit" value="Search Trains"  align="center"></td>
</tr>
<tr>
<td ><input type="reset" value="reset"  align="center"></td>
</tr>
</table>
</form>
</body>
</html>