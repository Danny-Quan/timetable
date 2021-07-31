<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: #fff;">
<style>
body::before{
    display:none;
}
body::after{
    display:none;
}
</style>
    <?php
    // include_once('classes/userView.class.php');
    include_once('classes/users.class.php');
include_once('header.php');
include_once('classes/list_notice.php');
    ?>
<div class="row">
    <div class="container">
    <form>
<div class="form-group col-xs-9">
<input type="search" name='notice_search' class="form-control" placeholder="search">
</div>
<div class="form-group col-xs-3">
<input type="submit" class="" id="search_notice" value="Search" name="search_notice">
</div>
    </form>
    <br>
    <br>
    <br>
    <br>
<div class="notice_area">
<?php

if($list_notice !==0){
foreach($list_notice as $key => $value)
{ ?>
<a href="read_more.php?id=<?php echo $value['id'];?> ">
        <div class='col-md-3 col-sm-4 single_notice'>
        <img src='image_uploads/<?php echo $value['images'];?> ' class='img-thumbnail notice_img'>
        <cite class='notice_date'><?php echo $value['created_date'];?></cite>
        <div class='notice_body'>
        <h5 class='text-uppercase notice_head'><?php if((strlen($value['title'])) > 22){echo substr($value['title'],0,22).'...';}else{echo $value['title'];}?></h5>
        <p class='notice_content'><?php echo substr($value['content'],0,80) ?>...</p>
        </div>
        </div>
</a>
<?php
}
    }

?>
</div>
</div>
<!-- notice from database -->

<!-- notice ends here -->
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