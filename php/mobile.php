<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Mobiles</title>
</head>
<body>

<?php getHeader(); ?>

<div class="container" id="tablemain">
    <div id="tablemain_text">Choose a vendor</div>
    <div class="row">
        <div class="col">
            <a href="#">
                <div class="cat_text">Samsung</div>
                <img class="img-fluid" src="../images/samsung.jpeg" alt="samsung phone image" class="Cat_img">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Apple</div>
                <img class="img-fluid" src="../images/iphone.jpeg" alt="iphone image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Huawei</div>
                <img class="img-fluid" src="../images/huawei.jpg" alt="huawei phone image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Google</div>
                <img class="img-fluid" src="../images/google.jpg" alt="google phone image">
            </a>
        </div>
    </div>
</div>

<?php getFooter(); ?>

</body>
</html>