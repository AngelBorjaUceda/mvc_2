<?php

class ComentariosController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Comentario.php');

        $comentario = new Comentario();

        $d['comentarios'] = $comentario->showAllComments();
        $this->set($d);
        $this->render("index");
    }

    function create(){

        require(ROOT . 'Models/Usuario.php');
        $usuario = new Usuario();

        require(ROOT . 'Models/Post.php');
        $post = new Post();

        $d['usuarios'] = $usuario->showAllUsers();
        $this->set($d);

        $d['posts'] = $post->showAllPosts();
        $this->set($d);

        if (isset($_POST["user_id"],$_POST["post_id"],$_POST["body"]))
        {

            require(ROOT . 'Models/Comentario.php');

            $comentario = new Comentario();

            if ($comentario->create($_POST["user_id"], $_POST["post_id"], $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index");
            }
        }
        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Comentario.php');
        $comentario = new Comentario();

        $d["comentario"] = $comentario->showComentario($id);

        if (isset($_POST["body"]))
        {
            if ($comentario->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function detail($id)
    {
        require(ROOT . 'Models/Comentario.php');
        $comentario = new Comentario();

        $d["comentario"] = $comentario->showComentario($id);

        $this->set($d);
        $this->render("detail");
    }

    
    function delete($id)
    {
        require(ROOT . 'Models/Comentario.php');

        $comentario = new Comentario();
        if ($comentario->delete($id))
        {
            header("Location: " . WEBROOT . "comentarios/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>