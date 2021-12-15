<h1>EDITAR COMENTARIO</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="tittle">Cambiar el comentario</label>
        <input type="text" class="form-control" id="tittle" placeholder="Introduzca su comentario..." name="body" value ="<?php if (isset($comentario["body"])) echo $comentario["body"];?>">
    </div>

    <button type="submit" class="btn btn-primary">Editar comentario</button>
</form>