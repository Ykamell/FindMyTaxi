<?php
include("Conexion.php"); 
$startDate = strval($_POST['startDate']);
$endDate = strval($_POST['endDate']);
echo $startDate;
echo " ";
echo $endDate;
$historical = mysqli_query($connection,"SELECT * FROM location WHERE dateTime>=$startDate AND dateTime<=$endDate  ORDER BY ID ASC");
	while($consulta=mysqli_fetch_array($historical)){
		$poly[]=array((float) $consulta['lat'],(float) $consulta['lon']);
	}
	echo json_encode($poly);

?>
