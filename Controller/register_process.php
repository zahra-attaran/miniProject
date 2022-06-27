<?php

include "Model/database.php";

if(isset($_POST['dscheck']))
{
    $password = $_POST["pswd"];
    $user_name = $_POST["user_name"];
    $mobile = $_POST["mobile"];

    $user_count = $db->query("SELECT * FROM sick WHERE username='$user_name'")->num_rows;
    if ($user_count == 0) {
        $secure_password = md5($password);
        $db->query("INSERT INTO sick(name, username, password, age, image, bio, mobile) VALUES ('','$user_name','$secure_password','','','','$mobile')");

        $_SESSION["message"] = "تبریک به جمع ما خوش آمدی";
        $_SESSION["message_type"] = "tabrik";
    } else {
        $_SESSION["message"] = "نام کاربری شما تکراری است";
        $_SESSION["message_type"] = "error";
    }
}
else
{
    $password = $_POST["pswd"];
    $user_name = $_POST["user_name"];
    $mobile = $_POST["mobile"];
    $user_count = $db->query("SELECT * FROM doctor WHERE username=$user_name")->num_rows;
    if ($user_count == 0) {
        $secure_password = md5($password);
        $db->query("INSERT INTO doctor(name, username, password, age, image, bio, mobile) VALUES ('','$user_name','$secure_password','','','','$mobile')");

        $_SESSION["message"] = "تبریک به جمع ما خوش آمدی";
        $_SESSION["message_type"] = "tabrik";
    } else {
        $_SESSION["message"] = "نام کاربری شما تکراری است";
        $_SESSION["message_type"] = "error";
    }
}
echo $secure_password;
header("Location: login");

