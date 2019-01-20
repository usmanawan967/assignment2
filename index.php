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

<div class="col-12" id="productPreview">
    <div class="col-12 col-sm-10" id="productContainer">
        <div id="caegory" class="text-center">
            <div class="categoryName">
                <h3>Mobiles:</h3>
            </div>
            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p1.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Samsung</b></p>
                        <p>J7 Prime<br><span class="finalPrice">PKR 25,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 26,000</span> -10%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p2.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Samsung</b></p>
                        <p>Galaxy Note9<br><span class="finalPrice">PKR 100,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 125,000</span> -15%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p3.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Nokia</b></p>
                        <p>Nokia 2<br><span class="finalPrice">PKR 25,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 27,000</span> -20%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p4.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Apple</b></p>
                        <p>Iphone X<br><span class="finalPrice">PKR 125,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 130,000</span> -5%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p5.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Apple</b></p>
                        <p>Iphone XS-MAX<br><span class="finalPrice">PKR 120,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 127,000</span> -11%</p>
                    </div>
                </div>
            </a>


            <div class="categoryName">
                <h3>Furniture:</h3>
            </div>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p6.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Interwood</b></p>
                        <p>Bed<br><span class="finalPrice">PKR 24,990</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 27,000</span> -8%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p7.jpeg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Ikea</b></p>
                        <p>Chair<br><span class="finalPrice">PKR 10,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 10,500</span> -2%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p8.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Ikea</b></p>
                        <p>Sofa<br><span class="finalPrice">PKR 25,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 25,500</span> -9%</p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="product inlineBlock col-7 col-md-4 col-lg-3">
                    <div class="productImage">
                        <img src="images/p9.jpg" class="img-fluid">
                    </div>
                    <div class="productDesc">
                        <p><b>Ikea</b></p>
                        <p>Dinning Table<br><span class="finalPrice">PKR 30,000</span></p>
                        <p class="discPrice"><span class="beforeDisc">PKR 40,000</span> -20%</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php getFooter(); ?>


</body>

</html>

