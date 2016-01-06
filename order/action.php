<?php
$con=mysqli_connect("mysql11.000webhost.com","a2111120_jarvis","abhi93","a2111120_users");

$content=addslashes($_POST['content']);
$feedid=$_POST['mail'];
$mname=$_POST['name'];

$query="INSERT INTO `bake_message` (`Username`,`Mail`,`Message`,`Time`,`Date`) values ('$mname','$feedid','$content',CURTIME(),CURDATE())";
mysqli_query($con,$query);

?>
<script>
alert("Your Message has been delivered");
window.open("http://fid.net16.net/bakery/order/home.php","_self");
</script>