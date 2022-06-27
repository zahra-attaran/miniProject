<?php
include "Model/database.php";

if (isset($_POST['dscheck']))

{
    $password = $_POST["pswd"];
    $username = $_POST["username"];
    $secure_password=md5($password);
    $result=$db->query("SELECT * FROM sick WHERE username='$username' and password='$secure_password'");
    $user_count= $result -> num_rows;
    if($user_count==1){
        $user=$result->fetch_assoc();
        $_SESSION["login_status"]=true;
        $_SESSION["UserName"]=$username;
        $_SESSION["UserID"]=$user["id"];

        header("Location: /");

    }

    else{
        $_SESSION["message"] = "نام کاربری یا گذرواژه شما صحیح نمی باشد";
        $_SESSION["message_type"] = "error";
//        header("Location: index");
    }
}

else{
    $password = $_POST["pswd"];
    $username = $_POST["username"];
    $secure_password=md5($password);
    $result=$db->query("SELECT * FROM doctor WHERE username='$username' and password='$secure_password'");
    $user_count= $result -> num_rows;
    if($user_count==1){
        $user=$result->fetch_assoc();
        $_SESSION["login_status"]=true;
        $_SESSION["UserName"]=$username;
        $_SESSION["UserID"]=$user["id"];

        header("Location: adminDashboard");

    }

    else{
        $_SESSION["message"] = "نام کاربری یا گذرواژه شما صحیح نمی باشد";
        $_SESSION["message_type"] = "error";
        header("Location: index");

    }
}

?>