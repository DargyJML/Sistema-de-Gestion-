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
        $alumno = new Cita(null, $_POST['nombres'], $_POST['apellidos'], $estado);

        Cita::save($alumno);
        $this->show();
    }

    function show()
    {
        $listaAlumnos = Cita::all();

        require_once('Views/Cita/show.php');
    }

    function updateshow()
    {
        $id = $_GET['idAlumno'];
        $alumno = Cita::searchById($id);
        require_once('Views/Cita/updateshow.php');
    }

    function update()
    {
        $alumno = new Cita($_POST['id'], $_POST['nombres'], $_POST['apellidos'], $_POST['estado']);
        Cita::update($alumno);
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
            $alumno = Cita::searchById($id);
            $listaAlumnos[] = $alumno;
            //var_dump($id);
            //die();
            require_once('Views/Cita/show.php');
        } else {
            $listaAlumnos = Cita::all();

            require_once('Views/Cita/show.php');
        }
    }

    function error()
    {
        require_once('Views/Cita/error.php');
    }
}

?>