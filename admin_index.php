    <?php
session_start();
require_once "db_connection.php";
require "functions.php";
require "header_footer.php";
if(!isset($_SESSION['user_email'])){
    header('location: admin_login.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <title>DevilHUB Admin Panel</title>
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<?php getHeader(); ?>

<div class="wrapper">
        <div class="sidebar-header">
            <h3> Admin Panel</h3>
        </div>
        <div style="text-decoration-color: black">
            <div class="align:right">
        <ul class="list-unstyled components">
            <li>
                <a href="admin_index.php?insert_product"  style="color: darkorange">
                    <i class="fas fa-plus" ></i> Insert New Product
                </a>
            </li>
            <li>
                <a href="admin_index.php?view_products"  style="color: darkorange">
                    <i class="fas fa-sitemap"></i> View All Products
                </a>
            </li>
            <li>
                <a href="admin_index.php?view_categories"  style="color: darkorange">
                    <i class="fas fa-band-aid"></i> View All Categories
                </a>
            </li>
            <li>
                <a href="logout.php" style="color: darkorange">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
            </div>
        </div>
    <div id="content">
        <div class="container" style="background: ghostwhite" >
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['insert_product'])){
                include ('insert_product.php');
            }
            else if(isset($_GET['view_products'])){
                include ('view_products.php');
            }
            else if(isset($_GET['edit_pro'])){
                include ('edit_pro.php');
            }
            else if(isset($_GET['del_pro'])){
                include ('del_pro.php');
            }
            else if(isset($_GET['view_categories'])){
                getCats();
            }
            else if(isset($_GET['edit_cat'])){
                include ('edit_cat.php');
            }
            else if(isset($_GET['del_cat'])){
                include ('del_cat.php');
            }
            ?>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
<?php getFooter(); ?>

</body>
</html>
