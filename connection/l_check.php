<?php
require("./connect.php");



$email=$_POST['login1'];

//$username=$_POST['login1']; 

$password=$_POST['login2']; 
// To protect MySQL injection

$email= stripslashes($email);

//$username = stripslashes($username);

$password = stripslashes($password);

$email = mysqli_real_escape_string($con,$email);

//$username = mysqli_real_escape_string($con,$username);

$password = mysqli_real_escape_string($con,$password);
$sql="SELECT * FROM bake_users WHERE Mail='$email' and Password='$password'";
$result=mysqli_query($con,$sql);
// Mysql_num_row is counting table row

$count=mysqli_num_rows($result);

if($count==1){
session_start();
$_SESSION['mail']= $email;
$_SESSION['password']= $password;
//session_register("username");
//session_register("password"); 
header("location:../order/home.php");
}
else {

?>
<script type="text/javascript">
window.open("http://fid.net16.net/bakery/login.php?postlog=0&ltem=1","_self");
</script>
<?php
//header("location:../random.html");
//echo "Wrong Username or Password";
}

?>
