<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>about</title>
</head>
<body>

<?php getHeader(); ?>

<div class="container" id="container_about" style="background-color: ghostwhite">

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Who we are?<span class="text-muted"></span></h2>
            <p class="lead">A group of young professionals eager to learn something new in the process of creating something different.</p>
        </div>
        <div class="col-md-5">
            <img src="../images/whovr.jpg" class="img-fluid" alt="">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Why are we doing this? <span class="text-muted"></span></h2>
            <p class="lead">What started off as a simple semester project is now being visited by hundreds, this is exactly why we are doing this...</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="../images/images.png" class="img-fluid" alt="">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">What makes us different? <span class="text-muted"></span></h2>
            <p class="lead">We have provided you with everything to see why this is different than other e-commerce websites.</p>
        </div>
        <div class="col-md-5">
            <img src="../images/different.jpg" class="img-rounded" alt="">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7" id="contributors">
            <h2 class="featurette-heading">Contributors <span class="text-muted"></span></h2>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Usman Ahmad Awan</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Fayzan Wasim</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Usman Fayyaz</h2>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Muhammad Ahmad</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Bilal Ahmad</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col">
            <img src="../images/perso.jpg" class="rounded-circle" width="50" height="50" alt="">
            <h2>Abdullah Sajjad</h2>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <hr class="featurette-divider">

    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6" style="text-align: center;">
            <h2>Social</h2>
            <div class="social">
                <a href="#" id="share-fb" class="sharer button"><i class="fa fa-3x fa-facebook-square"></i></a>
                <a href="#" id="share-tw" class="sharer button"><i class="fa fa-3x fa-twitter-square"></i></a>
                <a href="#" id="share-li" class="sharer button"><i class="fa fa-3x fa-linkedin-square"></i></a>
                <a href="#" id="share-gp" class="sharer button"><i class="fa fa-3x fa-google-plus-square"></i></a>
                <a href="#" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
        </div>
        <hr class="featurette-divider">

    </div><!-- /.container -->
</div>

<?php getFooter(); ?>

</body>
</html>
