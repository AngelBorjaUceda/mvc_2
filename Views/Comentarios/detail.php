<h1>DETALLE COMENTARIO</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Usuario</th>
            <th>ID Post</th>
            <th>Comentario</th>
            <th>F.Modificación</th>
            <th>F.Creación</th>
            <th class="text-center">Acción</th>
        </tr>
        	
        </thead>
        <?php
            echo '<tr>';
            echo "<td>" . $comentario['id'] . "</td>";
            echo "<td>" . $comentario['user_id'] . "</td>";
            echo "<td>" . $comentario['post_id'] . "</td>";
            echo "<td>" . $comentario['body'] . "</td>";
            echo "<td>" . $comentario['created_at'] . "</td>";
            echo "<td>" . $comentario['updated_at'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='". WEBROOT.  "comentarios/index' ><span class='glyphicon glyphicon-edit'></span> Volver</a></td>";
            echo "</tr>";
        
        ?>
    </table>
</div>