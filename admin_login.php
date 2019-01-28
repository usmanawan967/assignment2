<?php
session_start();
include ('db_connection.php');
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:admin_index.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<?php
require "header_footer.php"
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Admin Login</title>
</head>
<body>
<?php getHeader(); ?>
<h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
<h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
<div class="box">
    <br><br><br>
    <div class="login-form">
        <h2>Admin login</h2>
        <form class="login_form" action="admin_login.php" method="post">
            <div class="imgcontainer">
                <img src="images/avatar.png" height="35" alt="Avatar" class="avatar">
            </div>
            <div><?php echo $error_msg;?></div>
            </i><input type="text" placeholder=" User Name" id="user_email" name="user_email"
                                                                            value="<?php echo @$_COOKIE['user_email']?>" class="form-control" placeholder="Email address" required autofocus><br>
           </i><input type="Password" placeholder=" Enter Password" id="user_pass" name="user_pass"
                                                                              value="<?php echo @$_COOKIE['user_pass']?>" class="form-control" placeholder="Password" required> <br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">

        </form>
    </div>
    <br><br><br>
</div>

<?php getFooter(); ?>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>



