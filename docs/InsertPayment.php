<?php

// session_start();
$UserId = $_SESSION['UserId'];
$sqlPaymentQuery = "SELECT 
                        u.User_id AS UserId ,
                        u.Username AS UserName,
                        f.Item_id AS FoodId,
                        f.Name AS FoodName,
                        f.FoodPrice
                        FROM Orders o 
                        INNER JOIN Users u ON o.User_id = u.User_id 
                        INNER JOIN Food_Item f ON o.Item_id = f.Item_id
                        WHERE u.User_id = $UserId";
$result = mysqli_query($conn, $sqlPaymentQuery);

$totalPrice = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $totalPrice += $row['FoodPrice'];
}

$sqlPaymentInsert = "INSERT INTO `Payment` ( `User_id`, `Amount`) 
                    VALUES ( '$UserId', '$totalPrice')";

$sqlPaymentResult = mysqli_query($conn, $sqlPaymentInsert);


?>