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
    <title>Furniture</title>
</head>
<body>

<?php getHeader(); ?>

<div class="container" id="tablemain">
    <div id="tablemain_text">Choose a Category</div>
    <div class="row">
        <div class="col">
            <a href="#">
                <div class="cat_text">Chairs</div>
                <img src="images/chair.jpeg" alt="Chair  image" class="img-fluid">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Table</div>
                <img class="img-fluid" src="images/table.jpg" alt="Table image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Sofas</div>
                <img class="img-fluid" src="images/sofa.jpg" alt="Sofa image">
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="cat_text">Dressing Tables</div>
                <img class="img-fluid" src="images/dressingtable.jpg" alt="Dressing Table image">
            </a>
        </div>
    </div>
</div>

<?php getFooter(); ?>

</body>
</html>