<?php
require('./class.php');

if (isset($_POST['user'])) {
    $user= new User($_POST['user'], $_FILES['user']);
    echo json_encode($user->expose());
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <a class="navbar-brand" href="index.html">
                <img src="images\boots.svg" width="30" height="30" class="d-inline-block align-top" alt="" /> Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.html">Inicio 
                        <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="medicos.html">Medicos</a>
                    <a class="nav-item nav-link" href="empleo.html">Solicitud Empleo</a>
                    <a class="nav-item nav-link" href="hotel.html">Reservación Hotel</a>
                    <a class="nav-item nav-link" href="web.html">Inscripción Curso Web</a>
                    <a class="nav-item nav-link" href="cotizar.html">Cotización Vehiculo</a>
                </div>
            </div>
    </nav>

    <!-- Hero Section-->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="col-lg-12 ">
                        <h1>Solicitud de empleo</h1>
                        <p class="lead">Ingrese la información solicitada para completar la solicitud de empleo.</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-9 mx-auto">
                    <form method="POST" action="./php/phpform.php" autocomplete="on" class="form-group" enctype="multipart/form-data">
                        <!-- Default input name -->
                        <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Nombre:</label>
                        <input type="text" id="defaultFormCardNameEx" name="user[name]" class="form-control" maxlength="20" minlength="3" required>
                        <br>

                        <label for="defaultFormApellido" class="grey-text font-weight-light">Apellido:</label>
                        <input type="text" id="defaultFormApellido" name="user[apellido]" class="form-control" maxlength="50" minlength="3" required>
                        <br>

                        <label for="defaultFormCardTelEx" class="grey-text font-weight-light">Telefono:</label>
                        <input type="tel" id="defaultFormCardTelEx" name="user[tel]" class="form-control" minlength="8" minlength="12" required>
                        <br>
                        <label for="defaultFormCardEmailx" class="grey-text font-weight-light">Email:</label>
                        <input type="email" id="defaultFormCardEmailx" name="user[email]" class="form-control" minlength="8" minlength="12" required>
                        <br>

                        <label for="defaultFormDireccion" class="grey-text font-weight-light">Direccion:</label>
                        <textarea class="form-control" maxlength="100" id="defaultFormDireccion" name="user[direccion]" required></textarea>
                        <br>

                        <label for="defaultFormCardEmpleoEx" class="grey-text font-weight-light">Plaza a la que desea aplicar:</label>
                        <select class="custom-select" id="defaultFormCardEmpleoEx" name="user[empleo]" required>
                                <option value="" selected>Elige...</option>
                                <option value="Empleo 1">Empleo 1</option>
                                <option value="Empleo 2">Empleo 2</option>
                                <option value="Empleo 3">Empleo 3</option>
                                <option value="Empleo 4">Empleo 4</option>
                              </select>
                        <br>

                        <label for="defaultFormCardTipoAgenciaEx" class="grey-text font-weight-light">Agencia en la que desea laborar:</label>
                        <select class="custom-select" id="defaultFormCardTipoAgenciaEx" name="user[agencia]" required>
                                <option value="" selected>Elige...</option>
                                <option value="Agencia 1">Agencia 1</option>
                                <option value="Agencia 2">Agencia 2</option>
                                <option value="Agencia 3">Agencia 3</option>
                                <option value="Agencia 4">Agencia 4</option>
                              </select>
                        <br>

                        <label for="defaultFormCardCVEx" class="grey-text font-weight-light">Sube tu curriculum:</label>
                        <input type="file" accept="application/pdf" id="defaultFormCardCVEx" name="user[archivo]" class="form-control-file" required>
                        <br>

                        <label for="defaultFormCardIDEx" class="grey-text font-weight-light">ID:</label>
                        <input pattern="^\d{13}$" id="defaultFormCardIDEx" name="user[ID]" class="form-control" minlength="8" minlength="12" required>
                        <br>

                        <div class="text-center py-4 mt-3">
                            <input class="btn btn-outline-purple" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12 text-center">
                        <div class="col-lg-12">
                            <h1>Empleados Registrados</h1>
                        </div>
                    </div>
                    <div class="list-group mx-auto col-md-12 col-lg-6">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <div class="py-5 bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-6 mb-lg-0">
                    <h5>Bootstrap</h5>
                    <ul class="contact-info list-unstyled">
                        <li><a href="gezio111@gmail.com" class="text-dark">gezio111@gmail.com</a></li>
                        <li><a href="tel:123456789" class="text-dark">12345678</a></li>
                    </ul>
                    <p class="text-muted">Tercera tarea desarrollo web.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5>Source</h5>
                    <ul class="links list-unstyled">
                        <li> <a href="https://github.com/RailFX123/formulariosWeb" class="text-muted">Git</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-left">
                    <p class="mb-md-0">&copy; 2019 David Natareno. Derechos reservados. </p>
                </div>
                <div class="col-md-5 text-center text-md-right">
                    <p class="mb-0">Tema por David Natareno</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</htmlI