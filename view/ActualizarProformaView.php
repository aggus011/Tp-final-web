<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport Express</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../public/img/logoColor.ico" sizes="16x16 24x24 36x36 48x48">
    <script src="https://kit.fontawesome.com/dacf55610e.js"></script>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background: linear-gradient(to right, #3a7bd5, #00d2ff);
            color: #ffffff;
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

<h1 class="mt-2">Actualizacion de proforma N°{{idViaje}}</h1>


    <button type="button" class="mt-2 btn btn-light text-primary" data-toggle="modal" data-target="#ubicacion">
        Actualizar ubicacion
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="ubicacion">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando ubicacion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                        <button  style="border-color:#cccccc;color: #3a7bd5; background-color: #ffffff; border-radius: 6px; font-weight:bold "  onclick="getLocation()">Cargar Ubicacion</button>
                        <div id="demo"></div>
                        <script>
                            var x = document.getElementById("demo");

                            function getLocation() {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(showPosition,showError);
                                } else {
                                    x.innerHTML = "La Geolocalizacion no esta soportada en este browser.";
                                }
                            }

                            function showPosition(position) {
                                x.innerHTML = "<form action='actualizarUbicacion' method='post'>" +
                                    " <input type='hidden' name='latitud' value='"+ position.coords.latitude +"'>" +
                                    "<input type='hidden' name='idViaje' value='{{idViaje}}'>" +
                                    " <br> <input type='hidden' name='longitud' value='"+position.coords.longitude+"'>" +
                                    " <p class='font-weight-bold'>Datos cargados</p><br>" +
                                    "<input class='form-control btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>";
                            }


                            function showError(error) {
                                switch(error.code) {
                                    case error.PERMISSION_DENIED:
                                        x.innerHTML = "El Usuario a denegado el acceso a la Geolocalizacion."
                                        break;
                                    case error.POSITION_UNAVAILABLE:
                                        x.innerHTML = "La Informacion no esta disponible."
                                        break;
                                    case error.TIMEOUT:
                                        x.innerHTML = "Time Out."
                                        break;
                                    case error.UNKNOWN_ERROR:
                                        x.innerHTML = "Error desconocido."
                                        break;
                                }
                            }
                        </script>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <!--<form>-->
<!--    <div class="form-group m-4">-->
<!--        <label for="email">Email address:</label>-->
<!--        <input type="email" class="form-control" placeholder="Enter email" id="email">-->
<!--    </div>-->
<!--</form>-->
</body>