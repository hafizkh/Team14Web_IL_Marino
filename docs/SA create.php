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
    
   #$link=mysqli_connect("db", "root", "password", "Team14Web");

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
 


	if(isset($_POST['submit'])){
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$phone=$_POST['pNumber'];
		$msg=$_POST['Requests'];

		$to='syedmuaaz87@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="footer-container">
    <footer>
        <div class="footleft">
    
            <p>Il Marino Restaurant</p>
            <p>Address</p>
            <p>Tel. +358 2373 1462</p>
    
    
        </div>
        <div class="footmid">
            <p>
                2021-2022 &copy;, All rights reserved
            </p>
        </div>
        <div class="footright">
    
            <p>Opening hours</p>
            <p> Mon-Fri: 9.30-22.30</p>
            <p>Sat: 10.30-23.00</p>
            <p> Sun: Closed</p>
    
        </div>
    </footer>
    </div>
</body>
</html>

    
    
    
    



















?>