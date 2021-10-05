<?php
include("Conexion.php"); 
$startDate = strtotime($_POST['startDate']);
$endDate = strtotime($_POST['endDate']);
echo($startDate);
?>
