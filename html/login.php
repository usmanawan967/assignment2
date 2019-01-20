<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta charset="UTF-8">
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>

<?php getHeader(); ?>

<div class="box">
    <h2>login</h2>

    <form>
        <div class="imgcontainer">
            <img src="../images/avatar.png" height="35" alt="Avatar" class="avatar">
        </div>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><input type="text" placeholder=" User Name"
                                                                        required><br><br>
        <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i><input type="Password" placeholder=" Enter Password"
                                                                        required><br>
        <label>
            <input type="checkbox" checked="checked" name="remember "> Remember me
        </label>
        <input type="submit" value="login"> <br>
        <span class="psw">Forgot <a href="#">password?</a></span>

    </form>
</div>

<?php getFooter(); ?>

</body>
</html>