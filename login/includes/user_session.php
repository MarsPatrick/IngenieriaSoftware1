<?php

class UserSession{
    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function setCurrentInfo($user){
        $_SESSION['nombre'] = $user->getNombres();
        $_SESSION['apellido1'] = $user->getApellido1();
        $_SESSION['apellido2'] = $user->getApellido2();
        $_SESSION['rut'] = $user->getRut();
        $_SESSION['fechanac'] = $user->getFechaNac();
        $_SESSION['carrera'] = $user->getCarrera();
        $_SESSION['Telefono'] = $user->getTelefono();
        $_SESSION['correo'] = $user->getCorreo();
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function setCurrentPage($page){
        $_SESSION['page'] = $page;
    }

    public function getCurrentPage(){
        return $_SESSION['page'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>