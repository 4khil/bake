<?php session_start(); ?>
<?php $ne = $_SESSION['mail'];?>
<?php if($ne) {  ?>
<?php require("../connection/connect.php");?>
<?php $qpe="select * from bake_users where Mail='$ne'"; $popo=mysqli_query($con,$qpe); $p=mysqli_fetch_array($popo); $num=$p['ID']; $name=$p['Username']; $cntct=$p['Contact']; $pp=$p['Profile_pic']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home - Order</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
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
border:thick; padding:14px; background-color:#FF9933; color:#FFFFFF; width:60.5%; font-size:30px;


.but:hover
{
background-color:#FFCC99;
color:#CC6600;
}
</style>
</head>

<body>
<div style="width:100%; float:left; background-color:#FF9933; text-align:right; font-size:20px; color:#FFFFFF;">Welcome <?php echo $name; ?> &bull; <a href="./message.php" style="text-decoration:none; color:#FFFFFF;">Message</a> &bull; <a href="../connection/logout.php" style="text-decoration:none; color:#FFFFFF;">Logout</a></div>
<br /><br />
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Order Now</a></li>
    <li><a href="#tabs-2">Profile</a></li>
    <li><a href="#tabs-3">My Orders</a></li>

  </ul>
  <div id="tabs-1">
    <center><p><h1>Select a Date to Order</h1> <?php require("./calender.php"); ?></p></center>
  </div>
  <div id="tabs-2">
    <p><center><img src="<?php echo $pp; ?>" style="width:30%" /><br /><font style="font-size:20px"><?php echo $name; ?><br /><?php echo $ne; ?><br /><?php echo $cntct; ?></font></center></p>
  </div>
  <div id="tabs-3">
    <center>
    <table border="1" style="width:100%"><tr><td>Product</td><td>Quantity</td></tr>
    <?php
    $a="select * from bake_order where Mail='$ne'";
    $b=mysqli_query($con,$a);
    while($row1=mysqli_fetch_assoc($b))
    {
    ?>
   <tr><td><?php echo $row1['Product']; ?></td><td><?php echo $row1['Size']; ?></td></tr>
    <?php }
    ?>
    </table>
  </center>
  </div>
</div>
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
