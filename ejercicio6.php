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
    if (isset($_POST['num'])) {
        // Capturamos el valor del input y lo procesamos
        $valorInput1 = htmlspecialchars($_POST['num']);
        if ($valorInput1%2==0) {
            echo "El numero ".$valorInput1 ." es perfecto";
            exit;
        } else {
            echo "El numero ".$valorInput1 ." no es perfecto";
            exit;
        }

    }
    ?>
</head>

<body>
    <div class="container-fluid text-center bg-dark p-3 text-white">
        <div class="row">
            <div class="col-12">
                <h1>Ejercicios php</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 bg-dark">
                <div class="container-fluid border border-dark">
                    <div class="row">
                        <div class="col-12 p-0">
                            <button type="button" class="btn btn-dark btn-lg btn-block">Ejercicio 1</button>
                        </div>
                        <div class="col-12 p-0">
                            <button type="button" class="btn btn-dark btn-lg btn-block">Ejercicio 2</button>
                        </div>
                        <div class="col-12 p-0">
                            <button type="button" class="btn btn-dark btn-lg btn-block">Ejercicio 3</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-10 mt-2">
                <div class="container-fluid pr-5"> <!--exercise-->
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="p">Ejercicio 6: Cree un algoritmo que dado un numero entero determine si es este
                                un numero perfecto o no</div>
                        </div>
                    </div>
                    <div class="row mt-4 pr-5">
                        <div class="col-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Tamaño del arreglo</span>
                                </div>
                                <input id="num" type="number" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                            <button id="ajaxButton" class="btn btn-primary btn-md btn-block" data-toggle="modal"
                                data-target="#">Calcular</button>
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
                var inputValue1 = $('#num').val(); // Capturamos el valor del input

                // Verificamos si el campo está vacío
                if (inputValue1 === '') {
                    alert('Por favor ingresa un valor.');
                    return;
                }

                // Realizamos la solicitud AJAX
                $.ajax({
                    url: '', // El archivo PHP actual (puedes poner la URL de otro archivo PHP si es necesario)
                    type: 'POST',
                    data: { num: inputValue1 }, // Enviamos el valor del input como 'miInput'
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