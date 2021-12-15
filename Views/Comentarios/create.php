<h1>Crear Comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="user">Lista de Usuarios</label>
            <select name="user_id" class="form-control">
                <?php

                    echo ("<option selected> Escoga uno: </option>");

                    foreach ($usuarios as $usuario) {      
                        echo ("<option value=".$usuario['id'].">".$usuario['name']."</option>");}
                        
                ?>
            </select>

        <label for="post">Lista Posts</label>
            <select name="post_id" class="form-control">
                <?php

                    echo ("<option selected> Escoga uno: </option>");

                    foreach ($posts as $post) {
                        echo ("<option value=".$post['id'].">".$post['title']."</option>");
                    }

                ?>
            </select>

        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce un comentario..." name="body">
    </div>
    <button type="submit" class="btn btn-primary">Guardar nuevo Comentario</button>
</form> 