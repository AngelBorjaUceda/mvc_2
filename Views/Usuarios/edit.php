<h1>EDITAR USUARIO</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Cambiar el nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Introduzca su nombre..." name="name" value ="<?php if (isset($usuario["name"])) echo $usuario["name"];?>">
    </div>

    <div class="form-group">
        <label for="email">Cambiar el email</label>
        <input type="text" class="form-control" id="email" placeholder="Introduzca su email..." name="email" value ="<?php if (isset($usuario["email"])) echo $usuario["email"];?>">
    </div>
    
    <div class="form-group">
        <label for="password">Cambiar el contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Introduzca su contraseña..." name="password" value ="<?php if (isset($usuario["password"])) echo $usuario["password"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Editar usuario</button>
</form>