
<?php include 'header.php'?>

<?php include './Order_Foods/db.php' ?>
<body>
 <?php

$limitByPage=10;
$query='select * from Post' ;
$result=mysqli_query($conn,$query);
$totalresults=mysqli_num_rows($result);
$pagenumber=ceil($totalresults/$limitByPage);
if (!isset($_POST['page'])){
$page=1;    
}else{
$page=$_POST['page'];    
}
$firstpageresult=($page-1) * $limitByPage;

$query="Select * FROM Post Limit" .$firstpageresult .','. $limitByPage ;

while($row = mysqli_fetch_array($result))
{
echo '<div class="header">'. $row['Header'].'</div>'.
'<div class="postid"> Post id : '.$row['Post_id'].'</div>'.
' <div class="Emp_id"> Author id :' . $row['Employee_id'] .'</div>'.
'<div class="date">'."<br>Date :". $row['date_ps'].'</div>'.
"<br>".'<div class="text">'. $row['Text_ps'].'</div>'."<br>";
?>;
<html>
 <style>
.header{
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;    
}

 </style>  
</html>
<?php
}
for($page=1;$page<=$pagenumber;$page++)
{
echo ('<a href = newspage.php? page="'.$page.'>'.$page.'</a>');    
}

?>
<?php include 'footer.php' ?> 