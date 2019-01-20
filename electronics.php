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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Electronics</title>
</head>
<body>

<?php getHeader(); ?>

<div class="container" id="tablemain">
    <div id="tablemain_text">Choose a Category</div>
    <div class="row">
        <div class="col">
            <a href="#">
                <div class="cat_text">Laptops</div>
                <img src="images/laptop.jpg" alt="Laptop image" class="img-fluid">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Networking</div>
                <img class="img-fluid" src="images/router.jpg" alt="Router image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Accessories</div>
                <img class="img-fluid" src="images/accessories.jpg" alt="Earphones image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Microwave Ovens</div>
                <img class="img-fluid" src="images/oven.jpeg" alt="Earphones image">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="#">
                <div class="cat_text">Washing Machines</div>
                <img class="img-fluid" src="images/washingmachine.jpg" alt="Earphones image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">LED Tv</div>
                <img class="img-fluid" src="images/ledtv.jpg" alt="Earphones image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Sound Systems</div>
                <img class="img-fluid" src="images/soundsystem.jpg" alt="Earphones image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Cameras</div>
                <img class="img-fluid" src="images/camera.jpg" alt="Earphones image">
            </a>
        </div>
    </div>
</div>

<?php getFooter(); ?>

</body>
</html>