<?php

include_once('classes/userView.class.php');

// listing notice for notice_board area
$newNotice= new UserView();
$list_notice= $newNotice->showNotice();
// print_r($list_notice);

// listing notice for admin dashboard area
$newAdminNotice= new UserView();
$show_admin_notice= $newAdminNotice->show_admin_notice();


?>