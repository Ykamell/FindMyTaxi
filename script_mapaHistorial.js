$(document).ready(function(){	
	enviarDatos();
});
var latlon=[0,0];

function enviarDatos(){

	$("#frm").on("submit", function(e){
	e.preventDefault(); //Previene que la pagina se recargue
	var frm = $("#frm").serialize();
	$.ajax({
		"method": "POST",
		"url": "consulta_historico.php",
		"data": frm,
	}).done(function(LatLon1){
		console.log("VALUE: ", LatLon1);		
	});
});

}

	function onMapClick(e) {
		var latlon_click=e.latlng;
		var min=5;
		var Fecha=[];
		var n=0;
		for(var i = 0; i<= latlon.length-1; i++){

			var distance = map.distance(latlon_click , [  latlon[i][0] , latlon[i][1]   ]);
				if (distance < min) {
      			Fecha[n]=latlon[i][2];
      			n=n+1;
    			}
		}
			popup
			.setLatLng(e.latlng)
			.setContent("Coordenadas geográficas: <br>" + latlon_click.toString()+'<br> Fechas: <br>' + Fecha.join('<br>') )
			.openOn(map);
}
