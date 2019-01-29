<!DOCTYPE html>
<?php
require "header_footer.php";
require "functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>index</title>
</head>
<body>

<?php getHeader(); ?>

<div id="demo" class="carousel slide" data-interval="2000" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" class=""></li>
        <li data-target="#demo" data-slide-to="2" class=""></li>
        <li data-target="#demo" data-slide-to="3" class=""></li>
        <li data-target="#demo" data-slide-to="4" class=""></li>
        <li data-target="#demo" data-slide-to="5" class=""></li>
        <li data-target="#demo" data-slide-to="6" class=""></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/s.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
            <img src="images/mobile.jpg" alt="Chicago">    <!--1500*720-->
        </div>
        <div class="carousel-item">
            <img src="images/electronics.jpg" alt="New York">
        </div>
        <div class="carousel-item">
            <img src="images/laptop.jpg" alt="Paris">
        </div>
        <div class="carousel-item">
            <img src="images/mouse.jpg" alt="Paris">
        </div>
        <div class="carousel-item">
            <img src="images/sofa.jpg" alt="Paris">
        </div>
        <div class="carousel-item">
            <img src="images/table.jpg" alt="Paris">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<div class="row" id="productPreview" style="padding: 50px" >
    <?php getpro(); ?>
</div>

<?php getFooter(); ?>


</body>

</html>

