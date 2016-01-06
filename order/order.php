<?php
$con=mysqli_connect("mysql11.000webhost.com","a2111120_jarvis","abhi93","a2111120_users");

$name=$_POST['name'];
$mail=$_POST['mail'];
$product=$_POST['product'];
$size=$_POST['num'];
$strt_date=$_POST['strt_date'];
$rep=$_POST['val'];
$tdy=date('t');
if($rep=="Two Days")
{
if($val+$tdy>31)
{
$val=date('t');
}
else
{
$val=date('d') + 2;
}
}

if($rep=="Three Days")
{
if($val+$tdy>31)
{
$val=date('t');
}
else
{
$val=date('d') + 3;
}
}


if($rep=="Four Days")
{
if($val+$tdy>31)
{
$val=date('t');
}
else
{
$val=date('d') + 4;
}
}

if($rep=="Five Days")
{
if($val+$tdy>31)
{
$val=date('t');
}
else
{
$val=date('d') + 5;
}
}

if($rep=="Six Days")
{
if($val+$tdy>31)
{
$val=date('t');
}
else
{
$val=date('d') + 6;
}
}





if($rep=="All Seven Days")
{
$val=date('d') + 7;
if($val+$tdy>31)
{
$val=date('t');
}
}
else if($rep=="Full Month")
{
$val=date('t');
}

$query="INSERT INTO `bake_order` (`Username`,`Mail`,`Product`,`Size`,`Start_date`,`Repeat`,`Time`,`Date`) values ('$name','$mail','$product','$size','$strt_date','$val',CURTIME(),CURDATE())";
mysqli_query($con,$query);

?>
<script>
alert("Your Order has been Placed");
window.open("http://fid.net16.net/bakery/order/place_order.php","_self");
</script>	