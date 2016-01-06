<?php 
require("../connection/connect.php");

$a=$_POST['product'];

$b="insert into `bake_product` (`Product`) values ('$a')";
$c=mysqli_query($con,$b);


?>	
<script>
alert("The Product has been added to the list");
window.open("http://fid.net16.net/bakery/order/admin.php","_self");
</script>