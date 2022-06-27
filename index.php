<?php
session_start();

$request = $_SERVER["REQUEST_URI"];
$request = str_replace("/doctorsite", "", $request);

switch ($request) {
    case ("/"):
    case ("/index"):
        require "Controller/index.php";
        break;
    case ("/login.php"):
    case ("/login"):
        require "Controller/login.php";
        break;
    case ("/register_process"):
        require "Controller/register_process.php";
        break;
    case ("/logout"):
        require "Controller/logout.php";
        break;
    case ("/signIn"):
        require "Controller/login_process.php";
        break;
    case ("/adminDashboard"):
        require "Controller/admin.php";
        break;
    case ("/addSpecialt"):
        require "Controller/addSpecialt.php";
        break;
 case ("/rezerve.php"):
        require "Controller/rezerve.php";
        break;

//    default:
//        require "Controller/404.php";
//        break;
}
?>