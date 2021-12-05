<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8 without BOM">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentra tu Practica</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Encuentra tu practica</a>
    </nav>        
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>RGA_ID</th>
                        <th>CAR_ID</th>
                        <th>DOC_ID</th>
                        <th>RGA_RUT</th>
                        <th>RGA_PATERNO</th>
                        <th>RGA_MATERNO</th>
                        <th>RGA_NOMBRES</th>
                        <th>RGA_FECHA_NACTO</th>
                        <th>RGA_TELEFONO</th>
                        <th>RGA_CORREO_INST</th>
                        <th>RGA_FECHA_AUDI</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("tabla.php");
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>