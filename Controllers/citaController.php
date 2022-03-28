<?php

class CitasController
{

    function __construct()
    {
    }

    function landing()
    {
        require('Views/landing.php');
    }

    function add()
    {
        require('Views/solicitar.php');
    }

    function save()
    {
        $cita = new Cita(null, $_POST['nombres'], $_POST['apellidos'],);

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
        require_once('Views/error.php');
    }
}

?>