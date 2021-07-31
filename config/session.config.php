<?php

session_start();
if(isset($_SESSION['user_name'])){
    $user_session= $_SESSION['user_name'];
}else{
    header('location:login.php');
}

?>