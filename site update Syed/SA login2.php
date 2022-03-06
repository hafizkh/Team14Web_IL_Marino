<?php 
include "SA config.php";


if(isset($_POST['sub']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($link,"select * from admin where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{

header("location:SA Adminportal.php");
	
}
else
{
	echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'SA login.php\';</script>';
  
}
}
?>