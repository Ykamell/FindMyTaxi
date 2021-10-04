<?php
include("Conexion.php"); 
  if(isset($_POST['datetimes']) == 'Yes')
  {
    $startDate = strtotime($_POST['startDate']);
    $endDate = strtotime($_POST['endDate']);
    echo($startDate);
  }
}	
?>
