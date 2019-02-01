<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<?php getHeader(); ?>

<div class="box">
    <br><br><br>
    <div class="contact-form">

        <div class="input-fields">
            <input type="text" class="input" placeholder="Name">
            <input type="text" class="input" placeholder="Email">
            <input type="text" class="input" placeholder="Phone">
            <input type="text" class="input" placeholder="Subject">
        </div>
        <div class="msg">
            <textarea placeholder="Message"></textarea>
            <div class="btn">Send</div>
        </div>
    </div>
    <br><br><br>
</div>

<?php getFooter(); ?>

</body>
</html>