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
    

    <div class="container my-3">
        <h2>Select Your Favorite Food</h2>

        <div class="form-check">
            <form action="" method="POST" name="">
           
                       <table class="table">
                           <thead>
                               <tr>
                                   <th scope="col">Food Name</th>
                                   <th scope="col">Food Price</th>
                                   <th scope="col">Action</th>
                               </tr>
                           </thead>
                           <?php 
                    $foodListSQL = "SELECT * FROM Food_Item";
                    $foodListResult = mysqli_query($conn, $foodListSQL);
                    while($foodListRow = mysqli_fetch_assoc($foodListResult)){
                        
                        //echo "<input type='checkbox' name='foodItem[]' value=".$foodListRow['Item_id']."> ".$foodListRow['Name'] . "=> ".$foodListRow['FoodPrice']."<br>"; 
                        
                        echo "<tr>
                        <td> ".$foodListRow['Name'] ."</td>
                        <td> ".$foodListRow['FoodPrice'] . " €</td>
                        <td> <input type='checkbox' name='foodItem[]' value=". $foodListRow['Item_id']. ">" ."<br>". "</td>
                    
                        </tr>";
                
                    }
                    ?>

</form>
</table>
<input type="submit" name="saveOrder" value="Proceed to Payment" name="submit">
</div>

        <!-- <button class="btn btn-primary btn-sm" id="btnClick">Click to proceed</button> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
