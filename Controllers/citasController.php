<?php

class CitasController
{

    function __construct()
    {
    }

    function index()
    {
        require_once('Views/Cita/bienvenido.php');
    }

    function register()
    {
        require_once('Views/Cita/register.php');
    }

    function save()
    {
        if (!isset($_POST['estado'])) {
            $estado = "of";
        } else {
            $estado = "on";
        }
        $cita = new Cita(null, $_POST['nombres'], $_POST['apellidos'], $estado);

        Cita::save($cita);
        $this->show();
    }

    function show()
    {
        $listCitas = Cita::all();

        require_once('Views/Cita/show.php');
    }

    function updateshow()
    {
        $id = $_GET['idCita'];
        $cita = Cita::searchById($id);
        require_once('Views/Cita/updateshow.php');
    }

    function update()
    {
        $cita = new Cita($_POST['id'], $_POST['nombres'], $_POST['apellidos'], $_POST['estado']);
        Cita::update($cita);
        $this->show();
    }
    function delete()
    {
        $id = $_GET['id'];
        Cita::delete($id);
        $this->show();
    }

    function search()
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $cita = Cita::searchById($id);
            $listCitas[] = $cita;
            //var_dump($id);
            //die();
            require_once('Views/Cita/show.php');
        } else {
            $listCitas = Cita::all();

            require_once('Views/Cita/show.php');
        }
    }

    function error()
    {
        require_once('Views/Cita/error.php');
    }
}

?>