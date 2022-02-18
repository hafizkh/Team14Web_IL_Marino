
<html>
<head>
<title>Log in into your Il Marino account </title>
<h1>Log into your Il Marino account</h1>    
</head>
<body>
<form>
    <label for="username"></label> Username: <br>
    <input type="text" id="username" name="username"><br>
    <label for="pass"></label>Password:<br>
    <input type="text" id="pass" name="pass"><br>
    <input type="submit" value="submit"><br>
</form>    
</body>

</html>
<?php
 $userid=$_GET ['username'];
 $pass=$_GET ['pass'];
 $EnPass=password_hash($pass,PASSWORD_DEFAULT);
?>