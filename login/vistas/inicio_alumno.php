<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Alumno</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Encuentra tu practica</a>
    </nav>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card border-primary bg-secondary">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Inicio Sesion Alumno</h3>
                        </div>
                        <?php
                            
                            if(isset($errorLogin)){
                                echo $errorLogin;
                            }

                            ?>
                        <div class="card-body">
                            <form method="post">
                            

                                <label class="form-label" for="Correo">Correo Institucional</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input class="form-control" type="email" name="Correo" placeholder="Ingrese aqui su correo institucional">
                                </div>

                                <label class="form-label" for="Contra">Contraseña</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>    
                                    <input class="form-control" type="password" name="Contra" placeholder="Ingrese aqui su contraseña">
                                </div>

                                <br>
                                <input class="btn btn-success btn-sm" type="submit" name="enviar">
                            
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>




</body>

</html>
