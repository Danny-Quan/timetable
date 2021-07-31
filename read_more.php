<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include_once('classes/users.class.php');
include_once('classes/userView.class.php');
include_once('header.php');
    ?>
<body style="background: #161623;">
<style>
.navbar-default .navbar-nav>li>a{
    color:#fff;
    transition: color 0.3s;
}
</style>

<div class="row">
<div class="container">

<?php
// listing full notice
$full_notice= new userView();
$showFullNotice= $full_notice->show_full_notice($id);
if(isset($id)){ 
    // $full_notice= new userView();
    // $full_notice->show_full_notice($id);
    foreach($showFullNotice as $key => $value)
    { ?>
    <div class='full_notice'>
    <h4 class='text-uppercase'><?php echo $value['title'] ?></h4>
    <var class='label label-info'> Published On: <?php echo $value['created_date'] ?></var>
    <br><br><p><?php echo $value['content'] ?></p>
    <h5 class='text-capitalize label label-warning'>Published By: <?php echo $value['author'] ?></h5>
    </div>
    <?php 
    }
}
?>
</div>
</div>

<?php
include_once('footer.php');
?>
</body>
</html>