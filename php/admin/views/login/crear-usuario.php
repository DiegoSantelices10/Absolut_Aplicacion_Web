<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Absolut | Admin</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../css/estilos.css">
    <link rel="stylesheet" href="../../../../vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../../vendor/fontawesome-free-5.9.0-web/css/all.css">
</head>

<body id="crearusuario">
    
    <div class="container form-box-user">

        <div class="form-create-user">

            <form action="../../controllers/login/crear.usuario.controllers.php" method="POST" role="form">
                <legend>CREA UNA CUENTA NUEVA</legend>

                <div class="form-group">
                    <label for="">Usuario Nuevo</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="form-group">
                    <label for="">Password nuevo</label>
                    <input type="password" class="form-control" name="password" >
                </div>


                <button type="submit" class="btn btn-primary mt-3 w-100">CREAR CUENTA</button>
            </form>

        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../../js/popper.min.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
    <script src="../../../../vendor/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>