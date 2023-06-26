<br>
<?php if ($candidatos):?>
    <table class="table table-hover table-bordered">
        <thead>
        <h1>Listado de candidatos</h1>
            <tr>
                <th>ID</th>
                <th>DIGNIDAD</th>
                <th>TIPO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>MOVIMIENTO</th>
                <th>CEDULA</th>
                <th>CORREO ELECTRONICO</th>
                <th>TELEFONO</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candidatos as $filaTemporal): ?>
            <tr>
                    <td>
                        <?php echo $filaTemporal->id_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->tipo_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->dignidad_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nombre_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->apellido_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->movimiento_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->cedula_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->correo_cand;?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->telefono_cand ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->latitud_cand; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->longitud_cand; ?>
                    </td>
            </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

    <?php else: ?>
        <h1>no hay candidatos</h1>
        <?php endif;?>
