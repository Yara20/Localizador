<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title> REGISTRO USUARIO </title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/dist/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
    <div class="panel-body">
        <h1>Crear Cuenta</h1>
        <form action="crearUsuario2.php" method="POST">
            <div class="container">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombreCompleto" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Carnet Identidad</label>
                            <input type="text" class="form-control" name="ci" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="correo" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Codigo Pais</label>
                            <input type="number" class="form-control" name="codigoPais" placeholder="Ejm: 591" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Numero de Celular</label>
                            <input type="number" class="form-control" name="celular" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>                
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Clave</label>
                            <input type="password" class="form-control" name="clave" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Repetir Clave</label>
                            <input type="password" class="form-control" name="clave" placeholder="" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
            </div>
            <br>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
</body>
</html>