<?php

class Cita {

    private $id;
    private $solicitante;
    private $telefono;
    private $email;
    private $servicio;
    private $profesional;
    private $fecha;
    private $solicitud;

    function __construct($id, $solicitante, $telefono, $email, $servicio, $profesional, $fecha, $solicitud)
    {
        $this->setId($id);
        $this->setSolicitante($solicitante);
        $this->setTelefono($telefono);
        $this->setEmail($email);
        $this->setServicio($servicio);
        $this->setProfesional($profesional);
        $this->setFecha($fecha);
        $this->setSolicitud($solicitud);
    }

    public function getId(){
        return $this->$id;
    }

    public function setId(){
        $this->id = $id;
    }

    public function getSolicitante(){
        return $this->$solicitante;
    }

    public function setSolicitante(){
        $this->solicitante = $solicitante;
    }
    
    public function getTelefono(){
        return $this->$telefono;
    }

    public function setTelefono(){
        $this->telefono = $telefono;
    }

    public function getEmail(){
        return $this->$email;
    }

    public function setEmail(){
        $this->email = $email;
    }
    
    public function getServicio(){
        return $this->$servicio;
    }

    public function setServicio(){
        $this->servicio = $servicio;
    }

    public function getProfesional(){
        return $this->$profesional;
    }

    public function setProfesional(){
        $this->profesional = $profesional;
    }

    public function getFecha(){
        return $this->$fecha;
    }

    public function setFecha(){
        $this->fecha = $fecha;
    }

    public function getSolicitud(){
        return $this->$solicitud;
    }

    public function setSolicitud(){
        $this->solicitud = $solicitud;
    }

    public static function list($cita){
        $db= new Database();
        $listCitas=[];

        $select=$db->query('SELECT * FROM gestion order by id');

        foreach ($select->fetchAll() as $cita){
            $listCitas[]=new Cita($cita['id'], $cita['solicitante'], $cita['telefono'], $cita['email'], $cita['servicio'], $cita['profesional'], $cita['fecha'], $cita['solicitud']);
        }

        return $listCitas;
        
    }

}
