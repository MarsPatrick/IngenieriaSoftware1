<?php
include("con_db.php");

$RGA_ID = 1;
$CAR_ID = "SELECT CAR_ID FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$DOC_ID = "SELECT RGA_RUT FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_PA = "SELECT RGA_PATERNO FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_MA = "SELECT RGA_MATERNO FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_NO = "SELECT RGA_NOMBRES FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_FE = "SELECT RGA_FECHA_NACTO FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_TE = "SELECT RGA_TELEFONO FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_CO = "SELECT RGA_CORREO_INST FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$RGA_FA = "SELECT RGA_FECHA_AUDI FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";


$consulta = "SELECT * FROM etp_registro_alumno WHERE RGA_ID='$RGA_ID'";
$resultado = mysqli_query($conex,$consulta);
$verFilas = mysqli_num_rows($resultado);

$fila = mysqli_fetch_array($resultado);
if(!$resultado){
    echo "ERROR DE LA CONSULTA";
}else{
    if($verFilas<1){
        echo "<tr><td>Sin registros</td></tr>";
    }else{
        for ($i=0; $i <=$fila ; $i++) { 

            echo'
                <tr class = "table-info text-primary">
                <th scope="col">'.$fila[0].'</th> 
            ';
            for ($i=1; $i <=10 ; $i++) { 
                echo '<td>'.$fila[$i].'</td>';
            }
            echo '</tr>';

            $fila = mysqli_fetch_array($resultado);
        }
    }
}
?>