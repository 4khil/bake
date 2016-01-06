<?php require("../connection/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home - Admin</title>
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
<!--<div style="width:100%; float:left; background-color:#FF9933; text-align:right; font-size:20px; color:#FFFFFF;">Welcome <?php echo $name; ?> &bull; <a href="../connection/logout.php" style="text-decoration:none; color:#FFFFFF;">Logout</a></div>
<br /><br />-->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Orders</a></li>
    <li><a href="#tabs-2">User Profile</a></li>
    <li><a href="#tabs-3">Messages</a></li>
    <li><a href="#tabs-4">Add Product</a></li>
    <li><a href="#tabs-5">Delete Product</a></li>

  </ul>
  <div id="tabs-1">
    <center><p><h1>Orders for <?php echo date('M'); echo ","; echo date('Y'); ?></h1> 
    <table style="width:100%;" border="1"><tr><td>Name</td><td>Mail ID</td><td>Product</td><td>Quantity</td><td>Start Date for Order</td><td>End Date of Order</td></tr>
    <?php $a="select * from bake_order order by Date desc"; $b=mysqli_query($con,$a); while($row=mysqli_fetch_assoc($b)) {  ?>

<tr><td><?php echo $row['Username']; ?></td><td><?php echo $row['Mail']; ?></td><td><?php echo $row['Product']; ?></td><td><?php echo $row['Size']; ?></td><td><?php echo $row['Start_date']; ?></td><td><?php echo $row['Repeat']; ?></td></tr>


  <?php  } ?></table></p></center>
  </div>
  <div id="tabs-2">
    <table style="width:100%;" border="1"><tr><td>Name</td><td>Mail ID</td><td>Contact</td></tr>
    <p><center><?php $r="select * from bake_users"; $t=mysqli_query($con,$r); while($row2=mysqli_fetch_assoc($t)) { ?>

<tr><td><?php echo $row2['Username']; ?></td><td><?php echo $row2['Mail']; ?></td><td><?php echo $row2['Contact']; ?></td></tr>


  <?php  } ?></table>
   </center></p>
  </div>
  <div id="tabs-3">
    <center>
    <table style="width:100%;" border="1"><tr><td>Name</td><td>Mail ID</td><td>Message</td></tr>
    <?php $c="select * from bake_message order by Date desc"; $d=mysqli_query($con,$c); while($row1=mysqli_fetch_assoc($d)) {  ?>

<tr><td><?php echo $row1['Username']; ?></td><td><?php echo $row1['Mail']; ?></td><td><?php echo $row1['Message']; ?></td></tr>


  <?php  } ?></table>
  </center>
  </div>
  
  <div id="tabs-4">
   <center><h1>Add a product</h1><br />
   <form action="./add_product.php" method="post">
   <input type=text name="product" id="product" />
   <input type=submit value="Save Product" />  
   </form>
   </center>
  </div>


  <div id="tabs-5">
   <center><h1>Delete a product</h1><br />
   <table style="width:100%;" border="1"><tr><td>Product</td><td>Click to Remove</td></tr>
   <?php $q="select * from bake_product"; $s=mysqli_query($con,$q);  while($row3=mysqli_fetch_assoc($s)) {  ?>
   
   <tr><td><?php echo $row3['Product']; ?></td><td><a href="del_product.php?id=<?php echo $row3['ID']; ?>">Delete</a></td></tr>
   <?php  } ?></table>
   </center>
  </div>
</div>
</body>
</html>
