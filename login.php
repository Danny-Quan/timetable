<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<body style="background: #161623;">
    <?php

include_once('classes/userController.class.php');
include_once('classes/users.class.php');
include_once('header.php');
?>

<style>
.navbar-default .navbar-nav>li>a{
    color:#fff;
    transition: color 0.3s;
}
</style>


<div class="container">
<div class="login_box">
<div class="col-sm-6 hidden-xs login_header">
<h1 class="text-uppercase">Welcome <br>to uenr notice <br>admin login page</h1>
</div>
<div class="col-sm-6 form_area_login">
    <div class="user_img">
        <span class="glyphicon glyphicon-user"></span>
    </div>
<div class="title_form">
Login to get started
</div>
 <?php
if(isset($error)){
    echo "<div class='alert alert-danger'>".$error."</div>";
}
?>
<form method="POST" action="login.php">
<div class="form-group">
<input type="text" class="form-control" name="username" placeholder="Username">
</div>
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Your Password">
</div>
<div class="form-group">
<input type="submit" class="" name="login" value="Login">
</div>
</form>
</div>
</div>
</div>

<?php
include_once('footer.php');
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendors/js/bootstrap.min.js"></script>
</body>
</html>