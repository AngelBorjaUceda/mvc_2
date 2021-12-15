<h1>DETALLE USUARIO</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>F.Modificación</th>
            <th>F.Creación</th>
            <th class="text-center">Acción</th>
        </tr>
        </thead>
        <?php
            echo '<tr>';
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . $usuario['name'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "<td>" . $usuario['password'] . "</td>";
            echo "<td>" . $usuario['created_at'] . "</td>";
            echo "<td>" . $usuario['updated_at'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='". WEBROOT. "' ><span class='glyphicon glyphicon-edit'></span> Volver</a></td>";
            echo "</tr>";
        
        ?>
    </table>
</div>