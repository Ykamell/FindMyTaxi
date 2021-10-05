<?php
include("Conexion.php"); 
$start_Date = strval($_POST['startDate']);
$end_Date = strval($_POST['endDate']);
echo $start_Date;
echo " ";
echo $end_Date;
$historical = mysqli_query($connection,"SELECT * FROM location WHERE dateTime>=$startDate AND dateTime<=$endDate ORDER BY ID ASC");
while($consulta=mysqli_fetch_array($historical)){
	$poly[]=array((float) $consulta['lat'],(float) $consulta['lon'],(string) $consulta['dateTime']);		
}
echo json_encode($poly);
?>
