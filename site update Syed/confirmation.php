<?php
include 'header.php';
?>
<body>
<div class="form">
        <a href="index1.php">
            <img alt="Confirmation"
                src="https://i.stack.imgur.com/GQFRr.gif"
                width="250" height="75">
        </a>
</body>

<?php
echo 'Your Reservation Id is '. uniqid().' . You can use it to modify you reservation<br>';
include 'footer.php';
?>