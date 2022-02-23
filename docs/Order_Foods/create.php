<?php //include 'header.php'; ?>
<?php
include 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];

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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Database Table</title>
</head>

<body>
 

  <div class="container my-3">
    <h2>Fill in your details</h2>
    <form action="/Order_Foods/create.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">User Name</label>
        <input type="text" name="user_name" class="form-control" required id="text" aria-describedby="emailHelp" size="50">
      </div>
      <div class="mb-3">
        <label for="Phone" class="form-label">Phone</label>
        <input type="tel" name="user_phone" class="form-control" required id="user_phone">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">User Email</label>
        <input type="email" name="user_email" class="form-control" required id="user_email">
      </div>

      <button type="submit" class="btn btn-primary">Next >></button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php //include 'footer.php'; ?>
