
<?php
include 'header.php';
include 'SA config.php';
if(isset($_POST['upload'])){
    $NAME = $_POST['fname'];
    $EMAIL=$_POST['email'];
    $NUMBER=$_POST['pNumber'];
    $REQUEST=$_POST['Requests'];
    $GUESTS=$_POST['guests'];
    $DATE=$_POST['date'];
    $TIME=$_POST['time'];
    
   #$link=mysqli_connect("db", "sitedb", "password", "sitedb");

}
    $sql="INSERT INTO `reservation`(`cust_name`, `email`, `contact_no`, `res_event`, `no_of_guests`, `res_date`, `res_tim`)  VALUES ('$NAME','$EMAIL',$NUMBER,'$REQUEST','$GUESTS','$DATE','$TIME')";
    

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
    // Getting latest Res_ID
    $last_id = mysqli_insert_id($link);
    echo "<h3>Your Reservation is Successfull, Your Reservation ID is: " . $last_id. "<h3>Contact us with this ID if you wish to update or cancel your reservation";
} else{
    echo 'Error,Our system is down at the moment!';
    #echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
 






include 'footer.php';



















?>