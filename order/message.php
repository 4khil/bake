<?php session_start(); ?>
<?php $ne = $_SESSION['mail'];?>
<?php if($ne) {  ?>
<?php require("../connection/connect.php");?>
<?php $qpe="select * from bake_users where Mail='$ne'"; $popo=mysqli_query($con,$qpe); $p=mysqli_fetch_array($popo); $num=$p['ID']; $name=$p['Username']; $cntct=$p['Contact']; $pp=$p['Profile_pic']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Message</title>
<style>
html,body {
height: 100%;
overflow: hidden;
background-image:url(../images/back.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
background-position: center center;
/* background-position:0px 0px; */
background-size: cover;
/* background-size:100% 100%; */
}
.but
{
border:thick; padding:14px; background-color:#FF9933; color:#FFFFFF; width:60.5%; font-size:20px;


.but:hover
{
background-color:#FFCC99;
color:#CC6600;
}
</style>
</head>

<body>
<div style="width:100%; float:left; background-color:#FF9933; text-align:right; font-size:20px; color:#FFFFFF;">Welcome <?php echo $name; ?> &bull; <a href="./message.php" style="text-decoration:none; color:#FFFFFF;">Message</a> &bull; <a href="../connection/logout.php" style="text-decoration:none; color:#FFFFFF;">Logout</a></div>
<br /><br /><center>
<h1 style="color:#FFFFFF;">Send a Message to the Baker</h1>
    <form action="./action.php" method="post">
    <p><input type=hidden name="mail" id="mail" value="<?php echo $ne; ?>" /></p>
    <p><input type=hidden name="name" id="name" value="<?php echo $name; ?>" /></p>
    <p><textarea placeholder="Write a Message to the Baker" style="width:60%; height:200px;" id="content" name="content" required"></textarea><br /><input type=submit value="Send"  class="but" /></p>
    </form>
</center>
</body>
</html>
<?php } 
else
{ ?>
<script type="text/javascript">window.alert("Session Expired. Login to Continue!");
window.open("http://fid.net16.net/bakery/login.php","_self");
</script>
<?php 
}
?>