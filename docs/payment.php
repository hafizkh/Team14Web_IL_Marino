<?php
include 'db.php';
session_start();
$UserId = $_SESSION['UserId'];
$UserName = $_SESSION['UserName'];
$PaymentSelect = "SELECT 
                    u.User_id AS UserId ,
                    u.Username AS UserName,
                    f.Item_id AS FoodId,
                    f.Name AS FoodName,
                    f.FoodPrice
                    FROM Orders o 
                    INNER JOIN Users u ON o.User_id = u.User_id 
                    INNER JOIN Food_Item f ON o.Item_id = f.Item_id
                    WHERE u.User_id = $UserId";

$PaymentSelectResult = mysqli_query($conn, $PaymentSelect);

// $paymentRow = mysqli_fetch_assoc($PaymentSelectResult);
?>
<?php include 'header.php'; ?>
  <div class="container my-3">
      <div class="row" style="text-align: center;">
      <h1>IL MARINO</h1>
      <p>Name: <b><?php echo $UserName; ?></b></p>
      <p>Due Date: <?php echo date("d F Y",strtotime ( '+5 days' , strtotime ( date("d F Y") ) )); ?>
      </p>
    </div>
    <table class="table table-hover table-bordered table-sm table-responsive">
    <thead>
        <tr>
        <th scope="col">Food Name</th>
        <th scope="col">Food Price</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $totalPrice = 0;
    $fileName = $UserId . '-' . str_replace(' ', '-', $UserName) . '.txt';
    $myfile = fopen($fileName, 'w');
    $txt  = "==================================\n";
    $txt .= "|            IL MARINO           |\n";
    $txt .= "==================================\n";
    $txt .= 'Name=> ' . $UserName . "\n";
    $txt .= "---------------------------------\n";
    $txt .= "|    Food Name   |  Food Price  |\n";
    $txt .= "---------------------------------\n";

    while ($paymentRow = mysqli_fetch_assoc($PaymentSelectResult)) {
        /// Insertion into a file

        $txt .=
            '|' .
            str_pad($paymentRow['FoodName'], 16, ' ', STR_PAD_RIGHT) .
            '|' .
            str_pad($paymentRow['FoodPrice'].' €', 12, ' ', STR_PAD_LEFT) .
            "  |\n";

        $totalPrice += $paymentRow['FoodPrice'];
        echo '<tr>';
        echo '<td>' . $paymentRow['FoodName'] . '</td>';
        echo '<td>' . $paymentRow['FoodPrice'] . ' €</td>';
        echo '</tr>';
    }
    $txt .= "=================================\n";
    $txt .=
        '|' .
        str_pad('Total', 16, ' ', STR_PAD_RIGHT) .
        '|' .
        str_pad($totalPrice.' €', 12, ' ', STR_PAD_LEFT) .
        "  |\n";
    $txt .= "=================================\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo '<tr>';
    echo '<th> Amount </th>';
    echo '<th>' . $totalPrice . ' €</th>';
    echo '</tr>';
    ?>
        
    </tbody>
    </table>
    
    <?php echo "<a href='/Team14Web/docs/$fileName' download class='btn btn-outline-primary'>Download your bill</a>"; ?>
    <button onclick="window.print()" class='btn btn-outline-success'>Print your Receipt</button>
  </div>
  <?php include 'footer.php'; ?>