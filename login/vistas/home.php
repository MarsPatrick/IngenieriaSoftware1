<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Encuentra tu practica</a>
        <a href="vistas/perfilusuario.php" class="navbar-brand">Ver Perfil</a>
        <a href="includes/logout.php" class="navbar-brand"> Cerrar sesion</a>
    </nav>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row justify-content-center mt-4">
                <section>
                    <h1>Bienvenido <?php echo $user->getNombres(); ?></h1>
                </section>
            </div>         
        </div>
    </div>




</body>

</html>