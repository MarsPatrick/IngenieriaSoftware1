<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="../index.php" class="navbar-brand">Encuentra tu practica</a>
        <a href="../includes/logout.php" class="navbar-brand"> Cerrar sesion</a>
    </nav>

    <?php 
        
        include_once '../includes/user.php';
        include_once '../includes/user_session.php';
        session_start();
        $user = $_SESSION['user'];
    ?>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card border-primary bg-secondary">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Perfil Usuario</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <label class="form-label" for="Nombre">Nombres</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input class="form-control" type="text" id="Nombre" name="Nombre" value="" placeholder="Ingrese aqui su nombre">
                                </div>
                                
                                <label class="form-label" for="Apellido">Apellidos</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input class="form-control" type="text" id="Apellido" name="Apellido" placeholder="Ingrese aqui su apellido">
                                </div>
                                
                                <label class="form-label" for="RUT">R.U.T.</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-id-card-clip"></i></span>
                                    <input class="form-control" type="text" id="RUT" name="RUT" placeholder="Ingrese aqui su rut">
                                </div>

                                <label class="form-label" for="Fecha">Fecha Nacimiento</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-day"></i></span>
                                    <input class="form-control" type="text" name="Fecha" id="Fecha" placeholder="Seleccione su fecha de nacimiento">
                                </div>

                                <label class="form-label" for="Carrera">Carrera</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-university"></i></label>
                                    <select class="form-select" id="inputGroupSelect01" name="Carrera">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <label class="form-label" for="Telefono">Telefono</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                    <input class="form-control" type="text" id="Telefono" name="Telefono" placeholder="Ingrese aqui su numero de telefono">
                                </div>

                                <label class="form-label" for="Correo">Correo Institucional</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input class="form-control" type="email" id="Correo" name="Correo" placeholder="Ingrese aqui su correo institucional">
                                </div>

                                <label class="form-label" for="Contra">Contraseña</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>    
                                    <input class="form-control" type="password" id="Contra" name="Contra" placeholder="Ingrese aqui su contraseña">
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
                                    <button class="btn btn-success btn-sm col-md-4" type="submit" name="enviar">Editar</button>
                                    <button class="btn btn-danger btn-sm col-md-4 ml-4" type="submit" name="borrar">Borrar</button>
                                </div>
                                
                                <?php
                                    include("../includes/registro.php");
                                ?>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <?php
        include("../includes/calendario.php");
    ?>

    <?php   
        $a = $_SESSION['nombre'];
        $b = $_SESSION['apellido1'];
        $c = $_SESSION['apellido2'];
        $d = $_SESSION['rut'];
        $e = $_SESSION['fechanac'];
        $f = $_SESSION['carrera'];
        $g = $_SESSION['Telefono'];
        $h = $_SESSION['correo'];
    ?>

    <script>
        let user =("<?php echo $a ?>");
        document.getElementById("Nombre").value = user;  
        user =("<?php echo $b ?>" + " " + "<?php echo $c ?>");
        document.getElementById("Apellido").value = user;
        user =("<?php echo $d ?>");
        document.getElementById("RUT").value = user; 
        user =("<?php echo $e ?>");
        const fechas = user.split("-");
        user = fechas[1] +"/"+fechas[2]+"/"+fechas[0] ;
        document.getElementById("Fecha").value = user; 
        user =("<?php echo $g ?>");
        document.getElementById("Telefono").value = user; 
        user =("<?php echo $h ?>");
        document.getElementById("Correo").value = user; 
        user =("<?php echo $f ?>");
        document.querySelector("#inputGroupSelect01").value = user; 
    </script>
</body>

</html>
