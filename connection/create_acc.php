<?php
require("./connect.php");

$n=$_POST['username'];
$pass=$_POST['pass'];
$cntct=$_POST['cntct'];
$p=$_POST['mail']; 
$img="../images/default.jpg"; 

$qp = "INSERT INTO `bake_users` (`Username`,`Password`,`Profile_pic`,`Mail`,`Contact`,`Time`,`Date`) values ('$n','$pass','$img','$p','$cntct',CURTIME(),CURDATE())";
	$result = mysqli_query($con,$qp);


?>
<script type="text/javascript">
window.open("http://fid.net16.net/bakery/login.php?tem=1","_self");
</script>
