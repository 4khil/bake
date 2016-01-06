<?php session_start(); ?>
<?php $ne = $_SESSION['mail'];?>
<?php if($ne) {  ?>
<?php require("../connection/connect.php");?>
<?php $qpe="select * from bake_users where Mail='$ne'"; $popo=mysqli_query($con,$qpe); $p=mysqli_fetch_array($popo); $num=$p['ID']; $name=$p['Username']; $cntct=$p['Contact']; $pp=$p['Profile_pic']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Place Order</title>
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
</style>
<script>
function chng()
{
document.getElementById('num').clear();
document.getElementById('product').clear();
}
</script>
</head>

<body>
<div style="width:100%; float:left; background-color:#FF9933; text-align:right; font-size:20px; color:#FFFFFF;">Welcome <?php echo $name; ?> &bull; <a href="./message.php" style="text-decoration:none; color:#FFFFFF;">Message</a> &bull; <a href="../connection/logout.php" style="text-decoration:none; color:#FFFFFF;">Logout</a></div>
<br />
<center>
<div style="background-color:#FFFFFF; width:60%; height:500px;">
<h1 style="color:#FF9933">Place a Order</h1>
<font><!--Today is :--><?php echo date('l'); ?>, <?php echo date('d.m.Y'); ?></font>
<font><!--Date is :--><?php //echo date('d.m.Y'); ?></font>
<?php //echo 'Last Date     = ' . date('t')  . '<br />'; $lst= date('t'); $tdy=date('d'); $rem=$lst-$tdy; //echo " DAYS LEFT"; echo $rem;?>
<form action="./order.php" method="post">
<input type=hidden name="name" id="name" value="<?php echo $name; ?>" />
<input type=hidden name="mail" id="mail" value="<?php echo $ne; ?>" />
<p>Your Order Starts from the Current Date.<br />If you want to change your Start Date of Order for the Month of <?php echo date('M'); ?><br />then please choose the Date below</p>
<select id="strt_date" name="strt_date" style="width:60%; font-size:20px; ">
<?php
$lst= date('t'); 
$tdy=date('d');
for($i=$tdy;$i<=$lst;$i++)
{
?>
<option><?php echo $i; ?></option>
<?php
}
?>
</select>

<p><strong>Choose a Item</strong></p>
                                                        <?php
								$rpo="select Product from bake_product";
								$rtr=mysqli_query($con,$rpo);
							?>
							<input type=text name="product" list="did" id="product" autocomplete="off" placeholder="Search a product..." style="width:60%; font-size:20px; " required>
							<datalist id="did"><?php
							while($row=mysqli_fetch_assoc($rtr))
								{
	
								$nm=$row['Product'];
								?><option value="<?php echo $nm; ?>" id="vb"><?php
	
								}
								?></datalist>
<p><strong>Enter Quantity/Units in Numbers</strong></p>
<input type=text name="num" id="num" maxlength="2" style="width:60%; font-size:20px; " required />

<p><strong>Repeat this for the Next</strong></p>
<select id="val" name="val" style="width:60%; font-size:20px; ">
<option>Two Days</option>
<option>Three Days</option>
<option>Four Days</option>
<option>Five Days</option>
<option>Six Days</option>
<option>All Seven Days</option>
<option>Full Month</option>
</select>
<br />
<!--<br /><br />
<table style="border:solid;">
<tr><td>Monday</td><td><input type=checkbox name="val2" id="val2" value="1" /></td>
<td>Tuesday</td><td><input type=checkbox name="val3" id="val3" /></td>
<td>Wednesday</td><td><input type=checkbox name="val4" id="val4" /></td>
<td>Thrusday</td><td><input type=checkbox name="val5" id="val5" /></td>
<td>Friday</td><td><input type=checkbox name="val6" id="val6" /></td>
<td>Saturday</td><td><input type=checkbox name="val7" id="val7" /></td>
<td>Sunday</td><td><input type=checkbox name="val8" id="val8" /></td></tr>
</table>-->
<table><tr><td><!----></td><td><br /><input type="submit" value="Order" style="width:480px; font-size:20px; " /></td></tr></table>
</form>
<!--<button onclick="chng()">Reset</button>-->
</div>
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
