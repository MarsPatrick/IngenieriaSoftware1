<?php

include_once 'db.php';
class User extends DB{
    private $nombre;
    private $username;

    public function alumnoExists($user,$pass){
        $query = $this->connect()->prepare('SELECT * FROM etp_registro_alumno WHERE RGA_CORREO_INST = :user AND RGA_CLAVE = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }


    public function setAlumno($user){
        $query = $this->connect()->prepare('SELECT * FROM etp_registro_alumno WHERE RGA_CORREO_INST = :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->nombre = $currentUser['RGA_NOMBRES'];
            $this->apellido1 = $currentUser['RGA_PATERNO'];
            $this->apellido2 = $currentUser['RGA_MATERNO'];
            $this->rut = $currentUser['RGA_RUT'];
            $this->fechanac = $currentUser['RGA_FECHA_NACTO'];
            $this->carrera = $currentUser['CAR_ID'];
            $this->telefono = $currentUser['RGA_TELEFONO'];
            $this->username = $currentUser['RGA_CORREO_INST'];
        }

    }

    public function getNombres(){
        return $this->nombre;
    }

    public function getApellido1(){
        return $this->apellido1;
    }

    public function getApellido2(){
        return $this->apellido2;
    }

    public function getRut(){
        return $this->rut;
    }

    public function getFechaNac(){
        return $this->fechanac;
    }

    public function getCarrera(){
        return $this->carrera;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getCorreo(){
        return $this->username;
    }


}

?>