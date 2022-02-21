<?php
include 'db.php';
$isRun = false;

session_start();
$UserId = $_SESSION['UserId'];

$PaymentSelect = "SELECT * FROM Payment p INNER JOIN Users u ON u.User_id = p.User_id WHERE p.User_id = $UserId";
$PaymentSelectResult = mysqli_query($conn, $PaymentSelect);
$paymentRow = mysqli_fetch_assoc($PaymentSelectResult);
?>


<?php
echo '=========================================<br>';
echo 'Name: ' . $paymentRow['Username']. '<br>';
echo 'Total Amount: ' . $paymentRow['Amount'] .' €' .'<br>';
echo '=========================================<br>';

?>

