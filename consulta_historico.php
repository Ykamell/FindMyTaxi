<?php
include("Conexion.php"); 
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$historical = mysqli_query($connection,"SELECT * FROM location WHERE dateTime>=$startDate AND dateTime<=$endDate  ORDER BY ID ASC");
	while($consulta=mysqli_fetch_array($historical)){
		$poly[]=array((float) $consulta['lat'],(float) $consulta['lon']);
		echo $consulta['lat'];
	}
	echo json_encode($poly);

?>
