<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <?php
    // Comprobamos si la solicitud AJAX ha llegado
    if (isset($_POST['name']) && isset($_POST['id']) && isset($_POST['tel']) && isset($_POST['email'])) {
        // Capturamos el valor del input y lo procesamos
        $valorInputName = htmlspecialchars($_POST['name']);
        $valorInputId = htmlspecialchars($_POST['id']);
        $valorInputTel = htmlspecialchars($_POST['tel']);
        $valorInputEmail = htmlspecialchars($_POST['email']);
        echo "Usuario registrado<br>
                nombre: " . $valorInputName .
            "<br>Cedula: " . $valorInputId .
            "<br>Telefono: " . $valorInputTel .
            "<br>Email: " . $valorInputEmail;

        exit;
    }
    ?>
</head>

<body>
    <div class="container-fluid bg-dark p-3 text-white">
        <div class="row">
            <div class="col-2">
                <a href="menu.html" class="btn btn-secondary btn-lg btn-block">Menu</a>
            </div>
            <div class="col-10">
                <h1>Ejercicios php</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 mt-2">
                <div class="container-fluid pr-5"> <!--exercise-->
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="fs-4">Ejercicio 4: Realice el registro de una persona con al menos 4 datos
                                personales e inprima sus datos en una lista</div>
                        </div>
                    </div>
                    <div class="row mt-4 pr-5">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                                </div>
                                <input id="inputName" type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Cedula</span>
                                </div>
                                <input id="inputId" type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                    </div>
                    <div class="row pr-5">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telefono</span>
                                </div>
                                <input id="inputTel" type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input id="inputEmail" type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 pr-5 justify-content-center">
                        <div class="col-4">
                            <button id="ajaxButton" class="btn btn-primary btn-md btn-block" data-toggle="modal"
                                data-target="#">Registrar</button>
                        </div>
                    </div>
                    <div class="row mt-4 pr-5 justify-content-center">
                        <div class="col-12">
                            <!-- Área para mostrar el resultado -->
                            <div id="result" class="mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modals-->
    <div class="modal fade" id="modalresult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a los scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            // Cuando se haga clic en el botón
            $('#ajaxButton').click(function () {
                var inputValueName = $('#inputName').val(); // Capturamos el valor del input
                var inputValueId = $('#inputId').val(); // Capturamos el valor del input
                var inputValueTel = $('#inputTel').val(); // Capturamos el valor del input
                var inputValueEmail = $('#inputEmail').val(); // Capturamos el valor del input

                // Verificamos si el campo está vacío
                if (inputValueName === '' || inputValueId === '' || inputValueTel === '' || inputValueEmail === '') {
                    alert('Por favor ingresa un valor.');
                    return;
                }

                // Realizamos la solicitud AJAX
                $.ajax({
                    url: '', // El archivo PHP actual (puedes poner la URL de otro archivo PHP si es necesario)
                    type: 'POST',
                    data: {
                        name: inputValueName,
                        id: inputValueId,
                        tel: inputValueTel,
                        email: inputValueEmail
                    }, // Enviamos el valor del input como 'miInput'
                    success: function (response) {
                        // Cuando se recibe una respuesta, la mostramos
                        $('#result').html('<div class="alert alert-success">' + response + '</div>');
                    },
                    error: function () {
                        // Si hay un error, mostramos un mensaje
                        $('#result').html('<div class="alert alert-danger">Hubo un error al procesar la solicitud.</div>');
                    }
                });
            });
        });
    </script>



</body>

</html>