<h1>COMENTARIOS</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="<?php echo WEBROOT;?>comentarios/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Comentario</a>
        <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th class="text-center">Acción</th>
        </tr>
        </thead>
        <?php
        foreach ($comentarios as $comentario)
        {
            echo '<tr>';
            echo "<td>" . $comentario['id'] . "</td>";
            echo "<td>" . $comentario['body'] . "</td>";
           // echo "<td>" . $usuario['email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='". WEBROOT."comentarios/edit/" . $comentario["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='". WEBROOT."comentarios/delete/" . $comentario["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a><a href='". WEBROOT."comentarios/detail/" . $comentario["id"] . "' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-remove'></span> Detalle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>