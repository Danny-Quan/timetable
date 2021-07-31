<?php
include_once('dbconnection.class.php');

class UserView extends DbConnection{

function showNotice(){
    $sql= "SELECT * FROM notice ORDER BY id DESC";
    $stmt=$this->connect()->query($sql);
    $count= $stmt->rowCount();
    if($count >=1){
        $results=$stmt->fetchAll();
        return $results;
        // foreach($results as $cur){
        //     echo "<a href='read_more.php?id=".$cur['id']."'>"
        //     ."<div class='col-md-3 col-sm-4 single_notice'>"
        //     ."<img src='image_uploads/".$cur['images']."' class='img-thumbnail notice_img'".">"
        //     ."<cite class='notice_date'>".$cur['created_date']."</cite>"
        //     ."<div class='notice_body'>"
        //     ."<h5 class='text-uppercase notice_head'>".substr($cur['title'],0,22).'...'."</h5>"
        //     ."<p class='notice_content'>".substr($cur['content'],0,80).'...'."</p>"
        //     ."</div>"
        //     ."</div>"
        //     ."</a>";
        // }
    }else{
        $results= $count;
        return $results;
    }  
}

function show_admin_notice(){
    $sql= "SELECT * FROM notice ORDER BY id DESC";
    $stmt=$this->connect()->query($sql);
    $count= $stmt->rowCount();
    if($count >=1){
        $result=$stmt->fetchAll();
        return $result;
//         foreach($result as $cur){
//             $edit="edit ";
//             $delete=" delete";
// echo "<tr>".
// "<td>".$cur['created_date']."</td>"
// ."<td>".substr($cur['title'],0,10).'...'."</td>"
// ."<td>".substr($cur['content'],0,20).'...'."</td>"
// ."<td>".substr($cur['author'],0,15).'...'."</td>"
// ."<td>"
//    ."<a href='edit_notice.php?id=".$cur['id']."' class='btn-sm btn-primary'>"."<span class='glyphicon glyphicon-pencil'>"."</span>"."</a>".'&nbsp;'
//    ."<a href='admin_dashboard.php?id=".$cur['id']."' class='btn-sm btn-danger'>"."<span class='glyphicon glyphicon-trash'>"."</span>"."</a>"
// ."</td>"
// ."</tr>";
//         }
    }else{
        $result= $count;
        return $result;
    }  
}

function show_full_notice($id){
$sql= "SELECT * FROM notice WHERE id=$id";
$query= $this->connect()->query($sql);
$results= $query->fetchAll();
return $results;
foreach($results as $value){
    // echo "<div class='full_notice'>"
    // ."<h4 class='text-uppercase'>".$value['title']."</h4>"
    // ."<var class='label label-info'>".'Published On: '.$value['created_date']."</var>"
    // ."<br>"."<br>"."<p>".$value['content']."</p>"
    // ."<h5 class='text-capitalize label label-warning'>".'Published By: '.$value['author']."</h5>"
    // ."</div>";
}
}

}