<div class="row">
    <div class="col-md-12 text-center">
    <h1><b><p style="color:#001f36;">Lista de candidatos </p> </b></h1></div>
    </div>
    <br>
    <br>
    <br>
<?php if ($listadoCandidatos): ?>
  <table id="tabla-candidatos" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">DIGNIDAD</th>
      <th class="text-center">TIPO</th>
      <th class="text-center">NOMBRE</th>
      <th class="text-center">APELLIDO</th>
      <th class="text-center">MOVIMIENTO</th>
      <th class="text-center">CEDULA</th>
      <th class="text-center">CORREO</th>
      <th class="text-center">TELEFONO</th>
      <th class="text-center">LATITUD</th>
      <th class="text-center">LONGITUD</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($listadoCandidatos as $Temporal): ?>
      <tr>
        <td class="text-center"><?php echo  $Temporal->id_cand ?></td>
        <td class="text-center"> <?php echo $Temporal->dignidad_cand ?></td>
        <td class="text-center"> <?php echo $Temporal->tipo_cand ?></td>
        <td class="text-center"> <?php echo $Temporal->nombre_cand?></td>
        <td class="text-center"> <?php echo $Temporal->apellido_cand?></td>
        <td class="text-center"> <?php echo $Temporal->movimiento_cand?></td>
        <td class="text-center"> <?php echo $Temporal->cedula_cand?></td>
        <td class="text-center"> <?php echo $Temporal->correo_cand?></td>
        <td class="text-center"> <?php echo $Temporal->telefono_cand ?></td>
        <td class="text-center"> <?php echo $Temporal->latitud_cand?></td>
        <td class="text-center"> <?php echo $Temporal->longitud_cand ?></td>
        <td class="text-center">

          <a  href="<?php echo site_url("candidatos/borrar");?>/<?php echo $Temporal->id_cand ; ?>"class="btn btn-danger">
          <i class="glyphicon glyphicon-trash" ></i>Elimiar</a>
          </button>
           <a href="<?php echo site_url("candidatos/nuevos") ?>" class="btn btn-danger"></i>Agregar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe candidatos</b></h3>
<?php endif; ?>
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

  <!-- <script type="text/javascript">
    $("#tabla-postulaciones").DataTable();
  </script> -->
  <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
