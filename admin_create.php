<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php
include_once('classes/userController.class.php');
include_once('classes/users.class.php');

include_once('config/session.config.php');
include_once('header.php');
?>
<!-- this is the end of the header section -->
<body style="background:#f2f2f2;">
<style>
.navbar-default{
    background-color: #161623;
}
body::after{
  display:none;
}
body::before{
  display:none
}

  </style> 
<div class="main_slider_area">
<?php
include_once('slide_bar.php');
?>
<!-- end -->
<div class="container create_container">
    <div class="dashboard ">
        <h3 class="text-center text-uppercase">Create Notice</h3>
        <?php
        if(isset($error)){
            echo "<div class='alert alert-danger'>".$error."</div>";
        }
?>
<?php
if(isset($success)){
    echo "<div class='alert alert-success'>".$success."</div>";
}
?>
<form action="admin_create.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <input type="text" class="form-control" name="notice_title" placeholder="Enter title">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="notice_author" placeholder="Author">
</div>
<!-- <div class="form-group">
<input type="url" class="form-control" name="notice_url" placeholder="Enter Url">
</div> -->
<div class="form-group">
    <textarea class="form-control" name="notice_content" id="mycontent" placeholder="Enter your content here"></textarea>
</div>
<div class="form-group">
    <label>Select thumbnail image</label>
<input type="file" name="image_upload" accept=".jpg,.jpeg,.gif,.png,.svg">
</div>
<div class="form-group submit_button">
<input type="submit" class="" name="create_notice" value="Add Notice">
</div>
</form>
    </div>
    </div>
</div>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('mycontent',{
    filebrowserUploadUrl:"upload.php"
});
</script>
</body>
</html>