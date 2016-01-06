<?php
require("../connection/connect.php");

$a=$_GET['id'];

$b="delete from bake_product where ID='$a'";
$c=mysqli_query($con,$b);

?>
<script>
alert("The Product has been deleted");
window.open("http://fid.net16.net/bakery/order/admin.php","_self");
</script>