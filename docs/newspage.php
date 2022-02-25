
<?php include 'header.php'?>

<?php include './Order_Foods/db.php' ?>
<body>
 <?php

$limitByPage=5;
$query='SELECT * from Post' ;
$resultpost=mysqli_query($conn,$query);
$totalresults=mysqli_num_rows($resultpost);
$pagenumber=ceil($totalresults/$limitByPage);
if (!isset($_POST['page'])){
$page=1;    
}else{
$page=$_POST['page'];    
}
$firstpageresult=($page-1) * $limitByPage;

while($row = mysqli_fetch_array($resultpost))
{
$postid=$row['Post_id'];    
echo '<div class="poster">'.
'<div class="postid"> Post id : '.$row['Post_id'].'</div>'.
'<div class="Emp_id"> Author id :' . $row['Employee_id'] .'</div>'.
'<div class="date">'."Date :". $row['date_ps'].'</div>'.'<br>'.
'<div class="header">'. $row['Header'].'</div>'."<br>".
'<div class="text">'. $row['Text_ps'].'</div>'."<br>".
    '</div>';
 $query='SELECT * FROM Comments' ;
$resultcom=mysqli_query($conn,$query);   
while($row2=mysqli_fetch_array($resultcom) )
{
 if($postid == $row2['Post_id'] ){   
echo '<div class="commen">'
.'<div class="comid"> Comment id: '. $row2['Comment_id'] .'</div>'
.'<div class="userid"> User_id:'. $row2['User_id'] .'</div> '
.'<div class="textcom"> Comment: <br>'. $row2['text_cm'] .'</div><br>'
.'<div class="postidOncom">Related to number '. $row2['Post_id'] .' Post</div>  '
.'</div>';
}
}





}?>
<html>
<body>
<!--    
<form>
 <label for="usernam">Username:</label><br>
 <input type="text" id="usernam" name="usernam" required><br>
 <label for="emails">Email:</label><br>
 <input type="text" id="emails" name="emails"><br>
 <label for="phonenum">Phone number:</label><br>
 <input type="text" id="phonenum" name="phonenum"><br>
 <label for="postid">Post_id</label>
 <input type="text" id="postid" name="postid">
 <label for="comment">Comment</label>
 <input type="text" id="comment" name="comment">
 <input type="submit" value="Submit"><br>
 
</form>
</body>
-->
</html>
<?php
/*
#checks for imputed data
$username=$_POST['usernam'];
$email=$_POST['emails'];
$phone=$_POST['phonenum'];
$query='SELECT * FROM Users';
$usercheck=mysqli_query($conn,$query);
$row3=mysqli_fetch_array($usercheck);
if( $username!= $row3['Username'] or $email != $row3['email'] or $phone!= $row3['phonenumber'] ){
echo"No such user exists,creating a new one";
$sql="INSERT INTO Users (username,email,phonenumber) Values ($username,$email,$phone)";
$sql="SELECT Users";
$sql="INSERT INTO Comments()";
echo "new user created";


}
*/
?>
<html>

 <style>
.poster,.commen{
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
padding: 20px 10px 20px 30px;
background-color: whitesmoke ;
border: 10px; 
border-style: solid;
border-color: rgb(245, 228, 228) ;  
}

.header{

align-items: center;   
}

 </style>  
 
</html>
<?php
for($page=1;$page<= $pagenumber;$page++)
{
echo '<a href = "newspage.php?page='.$page.'">'.$page.'</a>';    
}
$conn->close();
?>
<?php include 'footer.php' ?> 
