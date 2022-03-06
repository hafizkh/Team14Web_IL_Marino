<?php

include 'SA config.php';
 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $NAME = $_POST['fname'];
 $EMAIL=$_POST['email'];
 $NUMBER=$_POST['pNumber'];
 $GUESTS=$_POST['guests'];
 $DATE=$_POST['date'];
 $TIME=$_POST['time'];
 $q = "UPDATE `reservation` SET cust_name='$NAME',email='$EMAIL',contact_no='$NUMBER',no_of_guests='$GUESTS',res_date='$DATE',res_tim='$TIME' WHERE res_id=$id";

 $query = mysqli_query($link,$q);

 header('location:SA upd-del.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Updating Reservation </h1>
 </div><br>
 <label> Name </label>
 <input type="text" name="fname" required class="form-control"> <br>
 <label> Email </label>
 <input type="Email" name="email" required class="form-control"> <br>
 <label> Phone Number </label>
 <input type="text" name="pNumber" required class="form-control"> <br>
 <label> Date </label>
 <input type="date" name="date" required class="form-control"> <br>
 <label> Time </label>
 <input type="time" name="time" requiredclass="form-control"> <br>
 <label> Number of Guests </label>
 <input type="number" name="guests" required class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>