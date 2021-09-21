<?php 
$host = apache_getenv("FINDMYTAXI_HOST");  #Si es en otro lugar va el HTTP..
$username = apache_getenv("FINDMYTAXI_USER");
$password = apache_getenv("FINDMYTAXI_PASSWORD");
$registro = apache_getenv("FINDMYTAXI_REG");
$connection = mysqli_connect($host, $username, $password, $registro); 
?>
