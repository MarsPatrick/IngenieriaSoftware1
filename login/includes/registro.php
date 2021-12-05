<?php

include("con_db.php");

$caja = $_POST['Nombre'];
if(isset($_POST['enviar'])){
    
    if(!empty($caja)){
        $idcarrera = 1;
        $iddocumen = 1;
        $rut       = $_POST['RUT'];
        $apellidos = $_POST["Apellido"];
        $apellido  = explode (" ",$apellidos);
        $nombres   = $_POST['Nombre'];
        $fechanaci = $_POST['Fecha'];
        $fechaform = date("Y-m-d", strtotime($fechanaci));
        $telefono  = $_POST['Telefono'];
        $correo    = $_POST['Correo'];
        $contra    = $_POST['Contra'];
        $consulta  = "SELECT RGA_ID FROM etp_registro_alumno WHERE RGA_RUT = $rut";
        $resultado = mysqli_query($conex,$consulta);
        $idalumno  = mysqli_result($resultado,"RGA_ID",0);
        echo $idalumno;
        $consulta = "UPDATE
        etp_registro_alumno
    SET
        RGA_RUT = $rut,
        CAR_ID = $idcarrera,
        RGA_PATERNO = $apellido[0],
        RGA_MATERNO = $apellido[1],
        RGA_NOMBRES = $nombres,
        RGA_FECHA_NACTO = $fechaform,
        RGA_CLAVE = $contra,
        RGA_PROMOCION = '2018',
        RGA_TELEFONO = $telefono,
        RGA_CORREO_INST = $correo,
    WHERE
        RGA_ID = $idalumno";
        
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            echo "se ha registrado correctamente";
            
        }else{
            echo "ha ocurrido un error";
        }
    }else{
        echo "rellene los campos porfavor";
    }    
}
if(isset($_POST['borrar'])){
    echo "a";
}
?>