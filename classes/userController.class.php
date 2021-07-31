<?php
include_once('dbconnection.class.php');

class UserCtrl extends DbConnection{
 
function registerUser($username,$password){
    $sql="INSERT INTO user (username,password) VALUES (?,?)";
    $stmt= $this->connect()->prepare($sql);
    // $password= md5($password);
    $stmt->execute([$username,$password]);
    $count= $stmt->rowCount();
    return $count;
}

function loginUser($username,$password){
    $query= $this->connect()->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $rowcount= $query->rowCount();
    return $rowcount;
         }

         function getUserInfo($username){
            $query= $this->connect()->query("SELECT * FROM user WHERE username='$username'");
            $rowcount= $query->rowCount();
            if($rowcount==1){
                $results= $query->fetchAll();
                return $results;
            }else{
                return $rowcount;
            }
                 }


function createNotice($author,$title,$content,$upload){
$sql="INSERT INTO notice (author,title,content,images) VALUES (?,?,?,?)";
$stmt= $this->connect()->prepare($sql);
$stmt->execute([$author,$title,$content,$upload]);
}

function deleteNotice($id){
$sql= "DELETE FROM notice WHERE id=?";
$stmt= $this->connect()->prepare($sql);
$stmt->execute([$id]);
}


function editNotice($author,$title,$content,$upload,$id){
$sql="UPDATE notice SET author='$author', title='$title', content='$content' WHERE id='$id'";
$query= $this->connect()->query($sql);
}

}