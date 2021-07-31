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
<div class="container edit_container">
    <div class="dashboard ">
        <h3 class="text-center text-uppercase">Edit Notice</h3>
        <?php
        if(isset($update_error)){
            echo "<div class='alert alert-danger'>".$update_error."</div>";
        }
?>
<?php
if(isset($update_success)){
    echo "<div class='alert alert-success'>".$update_success."</div>";
}
?>
<form action="edit_notice.php" method="POST" enctype="multipart/form-data">
<?php
// listing full notice into inputs

if(isset($id)){
$full_notice_input= new userView();
$showFullNotice= $full_notice_input->show_full_notice($id);
foreach($showFullNotice as $cur)
{
?>
<div class="form-group">
    <input type="text" class="form-control" name="edit_notice_title" placeholder="Enter title" value="<?php echo $cur['title']?>">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="edit_notice_author" placeholder="Author" value="<?php echo $cur['author'] ?>">
</div>
<!-- <div class="form-group">
<input type="url" class="form-control" name="notice_url" placeholder="Enter Url">
</div> -->
<div class="form-group">
    <textarea class="form-control" name="edit_notice_content" id="mycontent" placeholder="Enter your content here"><?php echo $cur['content']?></textarea>
</div>
<div class="form-group">
    <label>Edit thumbnail image</label>
<input type="file" name="edit_image_upload" accept=".jpg,.jpeg,.gif,.png,.svg" value="<?php echo $cur['images']?>">
</div>
<div class="form-group submit_button">
<input type="submit" class="" name="edit_notice" value="Update Notice">
</div>
<?php
}
}
?>
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