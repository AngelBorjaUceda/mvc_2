<h1>POST</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <!--<a href="<?php //echo WEBROOT;?>usuarios/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir usuario</a>-->
        <tr>
            <th>ID</th>
            <th>ID Usuario</th>
            <th>Post</th>
            <th>Acción</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['user_id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
            echo "<td class='text-center'><a href='". WEBROOT."posts/delete/" . $post["id"] . "' class='btn btn-danger btn-xs'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>