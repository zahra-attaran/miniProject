<?php
include "Model/database.php";
$Specialt = $_POST["Specialt"];
$idDoctor= $_SESSION["UserID"];
$db->query("INSERT INTO Specialty(Specialty, id_doctor) VALUES('$Specialt','$idDoctor')");
header("Location: index");

?>