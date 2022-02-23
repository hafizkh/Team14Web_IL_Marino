
<?php include 'header.php'?>
<html lang="en">
<head>
<?php include './Order_Foods/db.php' ?>
<?php
/* loop creating news pages from database,format them identically,limit posts on page. */
$page_base="newspage.php";
$post_id=$_POST['post_id'];
if(strlen($post_id) > 0 and !is_numeric($post_id))
{
echo"Incorect Value Type";
exit;
}
$page=($post_id - 0);
$limitByPage=10;
$query="select * from Post";
$result=mysqli_query($conn,$query);
$totalresults=mysqli_num_rows($result);
$pagenumber=ceil($totalresults/$limitByPage);
if (!isset($_POST['page'])){
$page=1;    
}else{
$page=$_POST['page'];    
}
$firstpageresult=($page-1) * $limitByPage;
$query="Select *FROM Post Limit" .$firstpageresult .','. $limitByPage ;
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
echo $row['Post_id'].''. $row['alphabet']."<br>";     
}
for($page=1;$page<=$pagenumber;$page++)
{
echo ('<a href = newspage.php? page="'.$page.'>'.$page.'</a>');    
}

?>
<!DOCTYPE html>

<h1>News</h1>
</head>
<body>
    
</body>
</html>
<?php include 'footer.php' ?>