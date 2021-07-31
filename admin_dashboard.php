<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php
include_once('config/session.config.php');
include_once('header.php');
include_once('classes/userView.class.php');
include_once('classes/users.class.php');
include_once('classes/userController.class.php');
include_once('classes/list_notice.php');
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
table{
  margin-top:40px;
}
  </style>  
<div class="main_slider_area">
<?php
include_once('slide_bar.php');
?>
<?php
if(isset($id)){
  $deleted_notice= new UserCtrl();
  $deleted_notice->deleteNotice($id);
}
?>
<!-- end -->
<div class="container">
    <div class="dashboard table-responsive">

    <!-- <h3 class="text-left text-capitalize">dashboard</h3>    -->
<table class="table table-striped table-responsive">
<thead>
<tr class="info">
<th>Date Created</th>
<th>Title</th>
<th>content</th>
<th>Author</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
// $allNotice= new UserView();
// $allNotice->show_admin_notice();
if($show_admin_notice !== 0){
  foreach($show_admin_notice as $key => $value){
    ?>
 <tr>
 <td><?php echo $value['created_date'] ?></td>
 <td><?php echo substr($value['title'],0,10) ?>...</td>
 <td><?php echo substr($value['content'],0,20) ?>...</td>
 <td><?php echo substr($value['author'],0,15) ?>...</td>
 <td>
    <a href='edit_notice.php?id=<?php echo $value['id']?>' class='btn-sm btn-primary'><span class='glyphicon glyphicon-pencil'></span></a>&nbsp;
    <a href='admin_dashboard.php?id=<?php echo $value['id']?>' class='btn-sm btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
 </td>
 </tr>
    <?php
  }
}
?>
</tbody>
</table>
    </div>
    </div>
</div>
</body>
</html>