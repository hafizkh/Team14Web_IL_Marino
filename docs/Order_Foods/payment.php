<?php
include 'db.php';
$isRun = false;

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
            str_pad($paymentRow['FoodPrice'], 12, ' ', STR_PAD_LEFT) .
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
        str_pad($totalPrice, 12, ' ', STR_PAD_LEFT) .
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
    
    <?php echo "<a href='/Order_Foods/$fileName' download class='btn btn-outline-primary'>Download your bill</a>"; ?>
    <button onclick="window.print()" class='btn btn-outline-success'>Print your Receipt</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
