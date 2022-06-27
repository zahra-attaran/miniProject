<?php

include "Model/database.php";
$post_id = $_GET["post-id"];
$dates=$db->query("SELECT * FROM date WHERE id_Specialty=$post_id");
$date_array = array();
foreach ($dates as $date){
    $date_array []=$date;
}
require "view/rezerve.php";




?>


