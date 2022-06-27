<?php
include "Model/database.php";
$post_id=$_POST["id_post"];
$user_id =$_SESSION["UserID"];

$count=$db->query("SELECT * FROM likes WHERE post_id=$post_id")->num_rows;
if($count==0){
//  ینی لایک نکرده اجازه داره الان لایک کنه
    $count=$db->query("INSERT INTO likes (post_id, user_id) values($post_id,$user_id)");
echo 0;
}
else{
//    قبلا لایک کرده الان باید دیسلایک بشه
    $db->query("DELETE FROM likes WHERE post_id=$post_id and user_id=$user_id");
    echo 1;
}
?>