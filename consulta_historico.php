<?php
include("Conexion.php"); 

$startDate = strtotime($_POST['startDate']);
$endDate = strtotime($_POST['endDate']);
echo(startDate);
if(isset($startDate && $endDate) {
	$historical = mysqli_query($connection,"SELECT * FROM location WHERE dateTime>=$startDate AND dateTime<=$endDate  ORDER BY ID ASC");
	while($consulta=mysqli_fetch_array($historical)){
		$poly[]=array((float) $consulta['lat'],(float) $consulta['lon']);
	}
	echo json_encode($poly);
	echo(startDate);
}	
?>
