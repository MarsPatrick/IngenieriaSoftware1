<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Alumno</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="registrarse.php" class="navbar-brand">Encuentra tu practica</a>
    </nav>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card border-primary bg-secondary">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Registro Alumno</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <label class="form-label" for="Nombre">Nombres</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input class="form-control" type="text" name="Nombre" placeholder="Ingrese aqui su nombre">
                                </div>
                                
                                <label class="form-label" for="Apellido">Apellidos</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input class="form-control" type="text" name="Apellido" placeholder="Ingrese aqui su apellido">
                                </div>
                                
                                <label class="form-label" for="RUT">R.U.T.</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-id-card-clip"></i></span>
                                    <input class="form-control" type="text" name="RUT" placeholder="Ingrese aqui su rut">
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
                                        <option selected>Seleccione aqui su carrera</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <label class="form-label" for="Telefono">Telefono</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                    <input class="form-control" type="text" name="Telefono" placeholder="Ingrese aqui su numero de telefono">
                                </div>

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
                            <?php
                                include("registro.php");
                            ?>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
    $(document).ready(function(){
        
        var date_input=$('input[name="Fecha"]'); //our date input has the name "date"
        date_input.datepicker({
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>


</body>

</html>
