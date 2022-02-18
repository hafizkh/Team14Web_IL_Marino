<?php include 'header.php'?>
<html>
<head>
<title>Create a new Il Marino account </title>
<h1>Create a new  Il Marino account</h1>    
</head>
<body>
<form>
    <label for="username"></label> Username: <br>
    <input type="text" id="username" name="username"><br>
    <label for="pass"></label>Password:<br>
    <input type="text" id="pass" name="pass"><br>
    <label for="email"></label> Email:<br>
    <input type="text" id="email" name="email"><br>
    <label for="phone"></label>PhoneNumber:<br>
    <input type="text" id="phone" name="phone"><br>
    <input type="Register" value="Register"><br>

</form>    
</body>

</html>


<?php
$username = $_GET["username"];
$password=$_GET["pass"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$EncPass=password_hash($password,PASSWORD_DEFAULT);
/* check if username already exists,hash the password,insert the data into the users. */
?>
<?php include 'footer.php'?>