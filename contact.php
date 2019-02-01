<?php
include ('db_connection.php');
$error_msg='';
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $subject = $_POST['subject'];

   $com = "INSERT INTO comments (msg,phone,name,email,subject) VALUES ('$msg','$phone','$name','$email','$subject')";
   $comment_result = mysqli_query($con,$com);
}
?>

<!DOCTYPE html>
<?php
require "header_footer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="description" content="Online Shopping Website">
    <meta name="keywords" content="online shopping,e-commerce,home delivery">
    <meta name="author" content="Muhammad Ahmad,Abdullah Sajjad,Usman Fayyaz">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<?php getHeader(); ?>

<div class="box">
    <br><br><br>
    <div class="contact-form">
        <form class="contact_form" action="contact.php" method="post">

        <div class="input-fields">
            <input type="text" id="name"  name="name" class="input" placeholder="Name">
            <input type="text" id="email" name="email" class="input" placeholder="Email">
            <input type="text" id="phone" name="phone" class="input" placeholder="Phone">
            <input type="text" id="subject" name="subject" class="input" placeholder="Subject">
        </div>
        <div class="msg">
            <textarea id='msg' name='msg' placeholder="Message"></textarea>
            <input class="btn btn-lg btn-primary mt-3" type="submit" name="send" value="Send comment">
        </div>
        </form>
    </div>
    <br><br><br>
</div>

<?php getFooter(); ?>

</body>
</html>
