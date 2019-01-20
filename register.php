<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/registerstyle.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<body>

<?php getHeader(); ?>

<div class="box">
    <h2>Sign Up</h2>
    <form>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><input type="text" placeholder=" First Name"
                                                                        required><br>

        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><input type="text" placeholder=" Last Name"
                                                                        required><br>

        <i class="fa fa-mars fa-lg fa-fw" aria-hidden="true"></i><input type="radio" name="Gender" value="Male">Male
        <i class="fa fa-venus fa-lg fa-fw" aria-hidden="true"></i><input type="radio" name="Gender" value="Female">Female<br>
        <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i><input type="text" placeholder="Date Of Birth"
                                                                            required><br>

        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i><input type="Email" placeholder=" Email Address"
                                                                            required><br>

        <i class="fa fa-unlock fa-lg fa-fw" aria-hidden="true"></i><input type="Password" placeholder=" New Passoword"
                                                                          required><br>
        <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i><input type="Password" placeholder=" Confirm Passoword"
                                                                        required>
        <input type="submit" value="Register">

    </form>
</div>

<?php getFooter(); ?>

</body>
</html>
