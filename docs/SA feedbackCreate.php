<?php
include 'header.php';
include 'SA config.php';
if(isset($_POST['upload'])){
    $NAME = $_POST['fname'];
    $EMAIL=$_POST['email'];
    $RES_ID = $_POST['res_id'];
    $FEEDBACK=$_POST['feedback'];
    
  // $link=mysqli_connect("db", "sitedb", "password", "sitedb");

}
    $sql="INSERT INTO `feedback`(`fname`, `email`, `res_id`, `feedback`) VALUES ('$NAME','$EMAIL','$RES_ID','$FEEDBACK')";
    

?>
<div class="form">
        <a>
            <img alt="Confirmation"
                src="https://i.stack.imgur.com/GQFRr.gif"
                width="250" height="75">
        </a>
</body>
<?php
if(mysqli_query($link, $sql)){
    $last_id = mysqli_insert_id($link);
    echo "<h3>Thank you for your Feeback, It will help us serve you better in the future. We really appreciate it!";
} else{
    echo "Error, Our Feedback system is currently down, Please try later. " ;
    #echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
 







include 'footer.php';