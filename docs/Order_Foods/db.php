<?php
// TO make the connection with Database

$servername = "db";
$username ="root";
$password = "password";
$dbname = "Team14Web1";

//Establishing the connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    // die ("Failed to connect to the Database because of this -->" . mysqli_connect_error());
}

else {
    // echo "Conncetion was Successful!";
}

?>