<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login to Order</title>
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
<br /><br /><br />
<h1 style="color:#FFFFFF">Sign in to Order</h1>
<table style="width:60%; background-color:rgba(0,0,0,0.2); color:#FFFFFF; height:100px; padding:20px; font-size:30px;">
<form action="./connection/l_check.php" method="post">
<tr><td style="font-size:30px;">Mail ID</td><td><input type=mail name="login1" id="login1" class="bx" required /></td></tr>
<tr><td style="font-size:30px;">Password</td><td><input type=password name="login2" id="login2"  class="bx" autocomplete="off" required /></td></tr>
<tr><td></td><td><input type=submit value="Login" style="width:340px; height:40px;" /></td></tr>
</form>
</table>
</center>
</html>
</body>
