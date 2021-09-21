<?php 
$host = $_ENV["FINDMYTAXI_HOST"];  #Si es en otro lugar va el HTTP..
$username = $_ENV["FINDMYTAXI_USER"];
$password = $_ENV["FINDMYTAXI_PASSWORD"];
$registro = $_ENV["FINDMYTAXI_REG"];
$connection = mysqli_connect($host, $username, $password, $registro); 

?>
