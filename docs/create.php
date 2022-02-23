<?php
include 'db.php';
session_start();
$message ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];

      // $sql1 = "SELECT * FROM `Users` WHERE `email` = '$user_email'";

      // $resultSelect = mysqli_query($conn, $sql1);

      // $row = mysqli_fetch_assoc($resultSelect);

      
      // if (is_array($row)) {
      //     $_SESSION['UserId'] = $row['User_id'];
      //     $_SESSION['UserName'] = $row['Username'];
      //    // $_SESSION['UserEmail'] = $row['email'];
      //     header('location: foodItem.php');
      // } else {
      //     $message = 'Invalid Username or Password!';
      // }


    $sql = "INSERT INTO `Users` (`Username`, `email`, `phonenumber`) VALUES ('$user_name', '$user_email', '$user_phone')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $sql1 = "SELECT * FROM `Users` WHERE `email` = '$user_email'";

        $resultSelect = mysqli_query($conn, $sql1);

        $row = mysqli_fetch_assoc($resultSelect);
        if (is_array($row)) {
            $_SESSION['UserId'] = $row['User_id'];
            $_SESSION['UserName'] = $row['Username'];
           // $_SESSION['UserEmail'] = $row['email'];
            header('location: foodItem.php');
        } else {
            $message = 'Invalid Username or Password!';
        }
    } else {
        // echo 'The record was not inserted due to ' . mysqli_error($conn);
    }
}
?>

<?php include 'header.php'; ?>
  <div class="container my-3">
    <h2>Fill in your details</h2>
    <div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-5">
    <form action="/Team14Web/docs/create.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">User Name</label>
        <input type="text" name="user_name" class="form-control" required id="text"  size="50" style="width:250px;">
      </div>
      <div class="mb-3">
        <label for="Phone" class="form-label">Phone</label>
        <input type="tel" name="user_phone" class="form-control" required id="user_phone"  style="width:250px;">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">User Email</label>
        <input type="email" name="user_email" class="form-control" required id="user_email"  style="width:250px;">
      </div>

      <button type="submit" class="btn btn-primary ">Next >></button>
    </form>    
  </div>
    <div class="col-md-3 "> </div>
    </div>
    
  </div>


<?php include 'footer.php'; ?>
