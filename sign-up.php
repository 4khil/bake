<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create Account</title>
<style>
html,body {
height: 100%;
overflow: hidden;
background-image:url(./images/back.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
background-position: center center;
/* background-position:0px 0px; */
background-size: cover;
/* background-size:100% 100%; */
}
.bx
{
width:60%;
border: 1px solid #b7bbbd; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px; font-size:20px;
}

</style>
</head>

<body>
<center>
<h1 style="color:#FFFFFF; ">CREATE ACCOUNT</h1>
<table style="width:60%; background-color:rgba(0,0,0,0.2); padding:20px; font-size:25px;">
<form action="./connection/create_acc.php" method="post">
<tr><td style="color:#FFFFFF;">Username</td><td><input type=text name="username" id="username" class="bx" autocomplete="off" required/></td></tr>
<tr><td style="color:#FFFFFF;">Password</td><td><input type=password name="pass" id="pass" class="bx" autocomplete="off"  required/></td></tr>
<tr><td style="color:#FFFFFF;">Mail ID</td><td><input type=email name="mail" id="mail" class="bx" autocomplete="off"  required/></td></tr>
<tr><td style="color:#FFFFFF;">Contact</td><td><input type=text name="cntct" id="cntct" class="bx" autocomplete="off" maxlength="11"  required/></td></tr>
<tr><td style="color:#FFFFFF;">Create Account</td><td><input type=submit value="SignUp!" style="width:62%; background-color:#FFFFFF; height:50px; color:#000000;" required/></td></tr>
</form>
</table>
</center>
</body>
</html>
