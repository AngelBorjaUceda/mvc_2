<h1>USUARIOS</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="<?php echo WEBROOT;?>usuarios/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Usuario</a>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th class="text-center">Acción</th>
        </tr>
        </thead>
        <?php
        foreach ($usuarios as $usuario)
        {
            echo '<tr>';
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . $usuario['name'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='". WEBROOT."usuarios/edit/" . $usuario["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='". WEBROOT."usuarios/delete/" . $usuario["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a><a href='". WEBROOT."usuarios/detail/" . $usuario["id"] . "' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-remove'></span> Detalle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>