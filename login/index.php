<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "HAY SESION";
    $user->setAlumno($userSession->getCurrentUser());
    $userSession->setCurrentInfo($user);
    include_once 'vistas/home.php';

}elseif (isset($_POST['Correo'])  && isset($_POST['Contra'])) {
    //echo "VALIDACION DE LOGIN";
    $userForm = $_POST['Correo'];
    $passForm = $_POST['Contra'];
    if($user->alumnoExists($userForm,$passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setAlumno($userForm);
        $userSession->setCurrentInfo($user);
        include_once 'vistas/home.php';
    }else{
        //echo "datos ingresados incorrectos";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'vistas/inicio_alumno.php';
    }
}else{
    //echo "PANTALLA LOGIN";
    include_once 'vistas/inicio_alumno.php';
}
?>