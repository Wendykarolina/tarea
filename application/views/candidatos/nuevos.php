<div class="row">
    <div class="col-md-12 text-center">
    <h1><b><p style="color:#001f36;">Ingrese nuevo candidato</p> </b></h1></div>
    </div>
</div>
<br>
<br>
<form class="" action="<?php echo site_url("candidatos/guardarCandidatos"); ?>" method="post">
  <div class="row">
    <div class="col-md-12">
      <label for="">Seleccione dignidad</label>
    </div>
    <div class="col-md-12">
      <select class="form control" type="text" name="dignidad_cand" class="form control input-sm" required>
        <option value="">SELECCIONAR</option>
        <option value="PRESIDENTES">PRESIDENTE</option>
        <option value="ASAMBLEISTAS_NACIONALES">ASAMBLEISTAS NACIONALES</option>
        <option value="ASAMBLEISTAS_PROVINCIALES">ASAMBLEISTAS PROVINCIALES</option>
      </select>
    </div>
  </div>
  <br>
  <br>
  <div class="row">
    <div class="col-md-12">
      <label for="">Seleccione Tipo</label>
    </div>
    <div class="col-md-12">
      <select class="form control" type="text" name="tipo_cand" class="form control input-sm" required>
        <option value="">SELECCIONAR</option>
        <option value="DERECHA">DERECHA</option>
        <option value="IZQUIERDA">IZQUIERDA</option>
      </select>
    </div>
  </div>
  <br>
  <br>
    <div class="row">
        <div class="col-md-6 text-center">
            <label for="">Ingrese nombre de candidato</label>
            <br>
            <input type="text" placeholder="Ingrese el nombre de candidato" class="form-control" name="nombre_cand" value=""
            id="nombre_cand" required>
            <br>
        </div>
        <div class="col-md-6 text-center">
            <label for="">Ingrese apellidos del candidato</label>
            <br>
            <input type="text" placeholder="Ingrese apellido de candidato" class="form-control" name="apellido_cand" value=""
            id="apellido_cand"required>
            <br>
        </div>

        <div class="col-md-6 text-center">
            <label for="">Movimiento</label>
            <br>
            <input type="text" placeholder="Ingrese movimiento" class="form-control" name="movimiento_cand" value=""
            id="movimiento_cand"required>
            <br>
        </div>
        <div class="row">
        <div class="col-md-6 text-center">
            <label for="">Cedula</label>
            <br>
            <input type="number" placeholder="Ingrese la cedula" class="form-control" name="cedula_cand" value=""
            id="cedula_cand"required>
            <br>
        </div>
        <div class="col-md-6 text-center">
            <label for="">correo electronico</label>
            <br>
            <input type="text" placeholder="Ingrese correo electronico" class="form-control" name="correo_cand" value=""
            id="correo_cand"required>
            <br>
        </div>
        <div class="col-md-6 text-center">
            <label for="">telefono</label>
            <br>
            <input type="number" placeholder="Ingrese su telefono" class="form-control" name="telefono_cand" value=""
            id="telefono_cand"required>
            <br>
        </div>
        <div class="col-md-6 text-center">
            <label for="">LATITUD</label>
            <br>
            <input type="float" placeholder="Ingrese su Altitud" class="form-control" name="latitud_cand" value=""
            id="latitud_cand"readonly>
            <br>
        </div>
        <div class="col-md-6 text-center">
            <label for="">LOGITUD</label>
            <br>
            <input type="float" placeholder="Ingrese su longitud" class="form-control" name="longitud_cand" value=""
            id="longitud_cand"readonly>
            <br>
        </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <button type="submit" name="button" class="btn btn-primary">Guardar</button>

                <a href="<?php echo site_url(); ?>/candidatos/listas"class="btn btn-danger">
                Cancelar</a>
            </div>
        </div>
        <br>
        <!-- //////MAPA PARA SELECCIONAR -->
            <div class="row">
              <div class="container">
                <div id="mapaUbicacion"
                style="height:300px; width: 100%;
                border:2px solid black;"></div>
              </div>
            </div>
            <script type="text/javascript">
            function initMap(){
              var centro=new google.maps.LatLng(-1.642666457056745, -78.67639361548689);
              var mapa1=new google.maps.Map(
                document.getElementById('mapaUbicacion'),
                {
                  center:centro,
                  zoom:7,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                }
              );
              var marcador=new google.maps.Marker({
                position:centro,
                map:mapa1,
                title:"Seleccione la direccion",
                icon: "<?php echo base_url('assets/images/verde.png'); ?>",
                draggable:true
              });
              ///// valores
              google.maps.event.addListener(marcador,'dragend',function(){
                // alert ("Se termino el Drag");
                document.getElementById('latitud_cand').value=
                this.getPosition().lat();
                document.getElementById('longitud_cand').value=
                this.getPosition().lng();
              });
            }///cierre de la funcion
            </script>
            <br>
            <br>
            <div class="row">
                    <div class="col-md-12 text-center">
                      <img src="https://www.cancilleria.gob.ec/santiago/wp-content/uploads/sites/130/2023/02/LOGO.png" alt="" height="350",width="300">
                      <style>
                  img {
                    border-radius: 10px;
                  }
                  </style>
</form>
<br>
<br>
<br>
<br><br>
