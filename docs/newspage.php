<?php include 'header.php'?>
<?php
/* loop creating news pages from database,format them identically,limit posts on page. */
$page_base="newspage.php";
$user_id=$_POST['user_id'];
if(strlen($user_id) > 0 and !is_numeric($user_id))
{
echo"Incorect Value Type";
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>News</h1>
</head>
<body>
    
</body>
</html>
<?php include 'footer.php' ?>