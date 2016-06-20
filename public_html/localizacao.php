				<script type="text/javascript">
					function initializeMap() {
						var myOptions = {
						  zoom: 16,
						  center: new google.maps.LatLng(-29.462898,-51.96716),
						  mapTypeId: google.maps.MapTypeId.ROADMAP,
						  streetViewControl: true,
						  mapTypeControl: true,
						  panControl: false,
						  zoomControl: true,
						  zoomControlOptions: {
							  style: google.maps.ZoomControlStyle.LARGE
						  },
						  scaleControl: false
						}
						var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
						var image = 'images/marker.gif';
						var myLatLng = new google.maps.LatLng(-29.462898,-51.96716);					
						var marker = new google.maps.Marker({
							position: myLatLng,
							map: map,
							icon: image
						});
					}
			

		            $(document).ready(function() {
		            	initializeMap();
		            });
				</script>

                <h1>Localização</h1>
                
                <p>
                    <strong>Endereço:</strong> 
				</p>
				<p>
					Avenida Benjamin Constant, 1010 - Sala 607 &mdash; Centro - Lajeado/RS 
				</p>
				<p>
					<strong>Pontos de referência</strong>:
				</p>
				<p>
					Esquina transversal ao INSS, a uma quadra do Hospital Bruno Born.
				</p>
				
				<div id="map_canvas" class="tab" style="width: 900px; height: 400px"></div>