<?php

class UsuariosController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Usuario.php');

        $usuario = new Usuario();

        $d['usuarios'] = $usuario->showAllUsers();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            require(ROOT . 'Models/Usuario.php');

            $usuario = new Usuario();

            if ($usuario->create($_POST["name"], $_POST["email"], $_POST["password"]))
            {
                header("Location: " . WEBROOT . "usuarios/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Usuario.php');
        $usuario = new Usuario();

        $d["usuario"] = $usuario->showUsuario($id);

        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]))
        {
            if ($usuario->edit($id, $_POST["name"], $_POST["email"], $_POST["password"]))
            {
                header("Location: " . WEBROOT . "usuarios/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function detail($id)
    {
        require(ROOT . 'Models/Usuario.php');
        $usuario = new Usuario();

        $d["usuario"] = $usuario->showUsuario($id);

        $this->set($d);
        $this->render("detail");
    }

    
    function delete($id)
    {
        require(ROOT . 'Models/Usuario.php');

        $usuario = new Usuario();
        if ($usuario->delete($id))
        {
            header("Location: " . WEBROOT . "usuarios/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>