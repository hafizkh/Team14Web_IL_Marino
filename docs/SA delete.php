<?php

include 'SA config.php';
$id = $_GET['id'];
$link=mysqli_connect("db", "root", "password", "Team14Web");
$q = " DELETE FROM `reservation` WHERE res_id = $id ";

mysqli_query($link, $q);

header('location:SA upd-del.php');

?>