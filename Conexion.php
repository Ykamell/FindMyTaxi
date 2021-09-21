<?php 
$host = $_SERVER["FINDMYTAXI_HOST"];  #Si es en otro lugar va el HTTP..
$username = $_SERVER["FINDMYTAXI_USER"];
$password = $_SERVER["FINDMYTAXI_PASSWORD"];
$registro = $_SERVER["FINDMYTAXI_REG"];
$connection = mysqli_connect($host, $username, $password, $registro); 

?>
