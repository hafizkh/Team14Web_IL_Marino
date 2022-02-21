<?php
include 'db.php';
session_start();
$isComplete = false;




if (!empty($_POST['saveOrder'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['foodItem'])) {
            foreach ($_POST['foodItem'] as $itemId) {
                $UserId = $_SESSION['UserId'];
                $orderSQLQuery = "INSERT INTO `Orders` (`User_id`, `Item_id`) VALUES ('$UserId', '$itemId')";
                $result = mysqli_query($conn, $orderSQLQuery);
                if ($result) {
                    $isComplete = true;
                } else {
                    echo 'The record was not inserted due to ' .
                        mysqli_error($conn);
                }

                //echo 'Chosen food : ' . $itemId . '<br/>';
            }
            if ($isComplete) {
                include 'InsertPayment.php';
                header('location: payment.php');
            }
        }
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Team14WPro/create.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <h2>Fill in your details</h2>

        <div class="form-check">
            <form action="" method="POST" name="">
            <?php 
                    $foodListSQL = "SELECT * FROM Food_Item";
                    $foodListResult = mysqli_query($conn, $foodListSQL);
                    while($foodListRow = mysqli_fetch_assoc($foodListResult)){
                        echo "<input type='checkbox' name='foodItem[]' value=".$foodListRow['Item_id']."> ".$foodListRow['Name'] ."<br>"; 
                        
                    }
                    ?>
                <input type="submit" name="saveOrder" value="Click to Proceed" name="submit">
            </form>
        </div>

        <!-- <button class="btn btn-primary btn-sm" id="btnClick">Click to proceed</button> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>