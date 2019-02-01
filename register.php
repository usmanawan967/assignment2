
<?php
include ('db_connection.php');
$error_msg='';
  if(isset($_POST['login'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['user_pass'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $sel_user = "select * from users where email='$email' AND pass='$pass'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        if($check_user==0){
            $reg_user = "INSERT INTO users (fname,lname,email,pass,dob,gender) VALUES ('$fname','$lname','$email','$pass','$dob','$gender')";
            $run_reg_user = mysqli_query($con,$reg_user);
            if(!$run_reg_user){
                $error_msg='Unable to register user';
                echo "<h1> error1 </h1>";
            }
        }
        else{
            $error_msg = 'Password or Email is wrong, try again';
            echo "<h1> error </h1>";
        }
    }
?>
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
<!--    <link rel="stylesheet" type="text/css" href="css/registerstyle.css">-->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<body>

<?php getHeader(); ?>

<script>

</script>



<div class="box">
    <br><br><br>
    <div class="login-form">
        <h2>Sign Up</h2>
        <form class="register_form" action="register.php" method="post">
            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><input type="text" name="fname" id="fname" placeholder=" First Name"
                                                                            required><br>

            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><input type="text" name="lname" id="lname"  placeholder=" Last Name"
                                                                            required><br>

            <i class="fa fa-mars fa-lg fa-fw" aria-hidden="true"></i><input type="radio" name="gender" value="Male">Male
            <i class="fa fa-venus fa-lg fa-fw" aria-hidden="true"></i><input type="radio" name="gender" value="Female">Female<br>
            <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i><input type="text" name="dob" placeholder="Date Of Birth"
                                                                                required><br>

            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i><input type="Email" placeholder=" Email Address" name="email" required id="email"><br>

            <i class="fa fa-unlock fa-lg fa-fw" aria-hidden="true"></i><input type="Password" placeholder=" New Password" name="user_pass"required id="user_pass"><br>
            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i><input type="Password" placeholder=" Confirm Password" required>
            <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">
        </form>
    </div>
    <div id="message"></div>
    <br><br><br>
</div>

<?php getFooter(); ?>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

</body>
</html>
