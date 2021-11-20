<html>
<head>
<title>signup</title>
<script type="text/javascript">
 function sign()
{
	if(!frm.firstName.value.match(/^[a-z A-Z ]+$/)||(frm.firstname.value==" "))
	alert("enter only alphabet in firstname");
        if(!frm.middleName.value.match(/^[a-z A-Z ]+$/)||(frm.middlename.value==" "))
	alert("enter only alphabet in middlename");
        if(!frm.lastName.value.match(/^[a-z A-Z ]+$/)||(frm.lastname.value==" "))
	alert("enter only alphabet in lastname");
	if(!frm.number.value.match(/^[0-9]+$/)||(frm.number.value==" "))
	alert("enter valid mobile numbers");
	if(!frm.email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/)||(frm.email.value==" "))
    alert("Wrong input for EMAIL");
	if(frm.pwd.value.match(frm.conpwd.value))
	alert("password and confirm password are not matching")
}
</script>
<style>
body{
    background-image:url("wRczMf.jpg");
	background-repeat:no-repeat;
	background-size:100%;
}
</style>
</head>
<body style="background-image:url(a2.jpg);background-size:100%;">

 <form name="frm" action="registration.php" method="post">
<table width="40%" align="center">
<tbody>
    <tr>        
        <td colspan="3" ><font size="3"><center><b>REGSTRATION FORM</b></center>        
    </tr>

    <tr>
        <td width="30%">First Name:</td>
        <td><input type="text" size="25" maxlength="20" name="firstname" placeholder="FirstName"></td>
    </tr>
    <tr>
        <td width="30%">Middle Name:</td>
        <td><input type="text" size="25" maxlength="20" name="middlename" placeholder="MiddleName"></td>
    </tr>
    <tr>
        <td width="30%">Last Name:</td>
        <td><input type="text" size="25" maxlength="20" name="lastname" placeholder="LastName"></td>
    </tr>
     <tr>
        <td width="30%">User Name:</td>
        <td><input type="text" size="25" maxlength="20" name="username" placeholder="UserName"></td>
    </tr>
    <tr>
        <td width="30%">Password:</td>
        <td><input type="password" size="25" maxlength="20" name="password"></td>
    </tr>
   
    <tr>
        <td width="30%">Email :</td>
        <td><input type="text" size="25" maxlength="25" name="email"></td>
    </tr>
   <tr>
        <td width="30%">Date-Of-Birth:</td>
        <td><input type="text" size="8" maxlength="25" name="date">
        </td>
    </tr>
	
    <tr>
        <td width="30" valign="middle">Gender:</td>
          <td><select name="gender">
              <option selected="selected" value="">select here</option>
              <option value="male">Male</option>
              <option value="female">Female</option>

            </select></td>
        </tr>
    <tr>
        <td width="30%">Adress:</td>
        <td><textarea rows="3" cols="30" name="address"></textarea></td>
    </tr>
    <tr>
        <td width="30%">Phone no:</td>
        <td><input type="text" size="25" maxlength="10" name="number"></td>
    </tr>
    <tr>
        <td ><input type="Reset"></td>
        <td ><input type="submit" value="Submit" onclick="sign()"></td>
    </tr>
</tbody>
</table>
</form>
<a href="login.php" style="color:;margin-left:480px;color:black;">already registered?</a>
</body>
</html>