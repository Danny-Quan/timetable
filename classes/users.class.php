<?php
include_once('userController.class.php');
include_once('userView.class.php');


if(isset($_POST['login'])){
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username) || empty($password)){
        $error="All fields are required";
    }else{
        // $password= md5($password);
        $user_login= new UserCtrl();
        $auth_user=$user_login->loginUser($username,$password);
        if($auth_user == 1){
            $make_sessions= $user_login->getUserInfo($username);
            foreach($make_sessions as $user_session){
                $_SESSION['user_name']= $user_session['username'];
                if(isset($_SESSION['user_name'])){
                    header("location:admin_dashboard.php"); 
                }
            } 
          }else{
              $error="Invalid credentials";
          }
    }
}


if(isset($_POST['create_notice'])){
    $title=$_POST['notice_title'];
    $author=$_POST['notice_author'];
    $content=$_POST['notice_content'];
    $upload= $_FILES['image_upload']['name'];
    $temp_name= $_FILES['image_upload']['tmp_name'];
    // echo $temp_name;
    $folder= 'image_uploads/';
    move_uploaded_file($temp_name,$folder.$upload);

    if(empty($title)|| empty($author) || empty($content)){
        $error='Please all fields are required';
    }else{
        $newPost= new UserCtrl();
        $newPost->createNotice($author,$title,$content,$upload);
        $success= "Notice created successfully";
    }
}

if(isset($_POST['edit_notice'])){
    $title= $_POST['edit_notice_title'];
    $author= $_POST['edit_notice_author'];
    $content= $_POST['edit_notice_content'];
    $upload= $_FILES['edit_image_upload']['name'];
    $temp_name= $_FILES['edit_image_upload']['tmp_name'];
    // echo $temp_name;
    $folder= 'image_uploads/';
    move_uploaded_file($temp_name,$folder.$upload);

    if(empty($title)|| empty($author) || empty($content)){
        $update_error='All fields are required';
    }else{
        $updated_Post= new UserCtrl();
        $updated_Post->editNotice($author,$title,$content,$upload,$id);
        $update_success= "Notice updated successfully";
    }
}

if(isset($_GET['id'])){
$id= $_GET['id'];
}




?>