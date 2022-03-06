<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Reservation Data Table </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Name </th>
 <th> Email </th>
 <th> Reservation ID </th>
 <th> Date </th> 
 <th> Time </th>
 <th> Guests </th>
 </tr >

 <?php
include 'SA config.php';
$con=mysqli_connect("db", "sitedb", "password", "sitedb");
 $q = "select * from reservation ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['cust_name'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['res_id'];  ?> </td>
 <td> <?php echo $res['res_date'];  ?> </td>
 <td> <?php echo $res['res_tim'];  ?> </td>
 <td> <?php echo $res['no_of_guests'];  }?> </td>
 
 </tr>
</table>  

 </div>
 </div>
