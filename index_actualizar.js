	function openNav() {
  		document.getElementById("mySidebar").style.width = "250px";
 		document.getElementById("main").style.marginLeft = "250px";
		document.getElementById("openButton").style.display = "none";
		}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
	function closeNav() {
		document.getElementById("mySidebar").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
		document.getElementById("openButton").style.display = "block";
	}

	$(function() {
		$('input[name="datetimes"]').daterangepicker({
			timePicker: true,
			timePickerSeconds: true,
			opens: 'right',
			startDate: moment().startOf('hour'),
			endDate: moment().startOf('hour').add(32, 'hour'),
			showDropdowns: true,
			locale: {
				format: 'YYYY-MM-DD hh:mm:ss'
			},
    	  	minYear: 1901,
    		maxYear: parseInt(moment().format('YYYY'),10)
		  
		});	 
		
		$('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
			console.log(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
			$.ajax({
				method: "POST",
				url: "consulta_historico.php",
				data: {startDate: picker.startDate, endDate: picker.endDate}
			 }).done(function(response){
				 console.log(startDate);
				 console.log(endDate);				 
				 console.log(response);
			 }).fail(function (error) {
				 // And handle errors here
				 console.log(error);
			 });
		});
	  
		$('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
			$(this).val('');
		});
	  
	});


	$(document).ready(function(){
		setInterval(
				function(){
					$('#Latitud').load('Latitud.php');
					$('#Longitud').load('Longitud.php');
					$('#Fecha').load('Fecha.php');
					$('#Hora').load('Hora.php');
					var Latitud=parseFloat($('#Latitud').text());
					var Longitud= parseFloat($('#Longitud').text());
					if (start){
                	markery = new L.marker([Latitud, Longitud]).addTo(map);
                	start = false;
           			}

					var newLatLng = new L.LatLng(Latitud, Longitud);
    					myMarker.setLatLng(newLatLng); 		
					polyline.addLatLng([Latitud,Longitud])	
					if(Checkstatus.checked) {
						map.fitBounds(polyline.getBounds());
					
					} else {
						map.setView([Latitud,Longitud]);					
					}
					
				},1500
			);			
	});
