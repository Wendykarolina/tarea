<div class="row">
  <div class="col-md-12 text-center">
    <h1> <b> MAPA DE LOS CANDIDATOS A ASAMBLEISTAS NACIONALES</b> </h1>
  </div>
</div>
<div class="row">
        <div class="col-md-12 text-center">
          <img src="https://www.cancilleria.gob.ec/santiago/wp-content/uploads/sites/130/2023/02/LOGO.png" alt="" height="350",width="300">
          <style>
      img {
        border-radius: 10px;
      }
      </style>
      <br>
      <br>
</div>
<div class="container">
			<div class="col-md-12">
				<div id="mapaPresidentes"
				style="height:500px; width:100%; border:2px solid black;"></div>
			</div>
		</div>
		<script type="text/javascript">
  		function initMap(){////cualquier nombre que nos guste en la funcion
  			var centro=///cualquier nombre
  			new google.maps.LatLng(-0.9322600236325245, -78.61529501495609); ///funcion de google maps para crear coordenadas "google.maps.LatLng"
  			///colocar cualquier nombre
  			//google.maps.Map nos permite construir el mapa
  			var mapaPresidentes=new google.maps.Map(document.getElementById('mapaPresidentes'), //nombre del id de arriba
  			{
  				center:centro,
  				zoom: 8,
  				mapTypeId:google.maps.MapTypeId.HYBRID
  			}
  		);
  		<?php if($candidato2): ?>
  		<?php foreach ($candidato2 as $lugarTemporal): ?>
  		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_cand; ?>,<?php echo $lugarTemporal->longitud_cand; ?>);///nombre en variable salgan muchos indicadores o marcdadores
  		var marcador=new google.maps.Marker({
  			position:coordenadaTemporal,
  			title:"<?php echo $lugarTemporal->nombre_cand; ?>",
        icon: "<?php echo base_url('assets/images/azul.png'); ?>",

  			map:mapaPresidentes ///el nombre de var
  		});
  		<?php endforeach; ?>
  		<?php endif ?>
	}//cierre de la funcion init map
		</script>
