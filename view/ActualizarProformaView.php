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
        .botones{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

<h1 class="mt-2">Actualizacion de proforma N°{{idViaje}}</h1>
<div class="botones">


    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#ubicacion">
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
<!--Fin de Boton de ubicacion-->
<!-- inicio boton de kilometros-->
<button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#kilometros">
    Actualizar Kilometros
</button>
<!-- The Modal -->
<div class="modal text-primary" id="kilometros">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Actualizando kilometros</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action='actualizarKilometros' method='post'>
                    <input type='hidden' name='idViaje' value='{{idViaje}}'>
                    <input class="form-control" type="number" name="actualKilometros" placeholder="Ingrese kilometros recorridos" required>
                    <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--    fin boton de kilometros-->
    <!-- inicio boton de combustible-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#combustible">
        Actualizar combustible
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="combustible">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando combustible</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarCombustible' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarCombustible" placeholder="Ingrese combustible gastado" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de combustible-->
    <!-- inicio boton de ETD-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#ETD">
        Actualizar ETD
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="ETD">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando ETD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarETD' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control"  type='datetime-local' name='actualizarEtd' placeholder="Tiempo estimado de salida" autocomplete='off' required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de ETD-->
    <!-- inicio boton de ETA-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#ETA">
        Actualizar ETA
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="ETA">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando ETA</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarETA' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control"  type='datetime-local' name='actualizarEta' placeholder="Tiempo estimado de llegada" autocomplete='off' required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de ETA-->
    <!-- inicio boton de viaticos-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#viaticos">
        Actualizar viaticos
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="viaticos">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando viaticos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarViaticos' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarViaticos" placeholder="Ingrese precio total de viaticos" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de viaticos-->
    <!-- inicio boton de peaje/pasaje-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#peajePasaje">
        Actualizar peaje/pasaje
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="peajePasaje">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando peaje/pasaje</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarPeajePasaje' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarPeajePasaje" placeholder="Ingrese precio total de peaje/pasaje" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de peaje/pasaje-->
    <!-- inicio boton de extras-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#extras">
        Actualizar extras
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="extras">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando extras</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarExtras' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarExtras" placeholder="Ingrese precio total de extras" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de extras-->
    <!-- inicio boton de hazard-->
    <button type="button" class="mr-5 ml-5 mt-3 btn btn-light text-primary" data-toggle="modal" data-target="#hazard">
        Actualizar hazard
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="hazard">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando hazard</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarHazard' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarHazard" placeholder="Ingrese precio total de hazard" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de hazard-->
    <!-- inicio boton de reefer-->
    <button type="button" class="mr-5 ml-5 mt-3 mb-5 btn btn-light text-primary" data-toggle="modal" data-target="#reefer">
        Actualizar reefer
    </button>
    <!-- The Modal -->
    <div class="modal text-primary" id="reefer">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizando reefer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='actualizarReefer' method='post'>
                        <input type='hidden' name='idViaje' value='{{idViaje}}'>
                        <input class="form-control" type="number" name="actualizarReefer" placeholder="Ingrese precio total de reefer" required>
                        <input class='form-control mt-3 btn btn-primary text-light font-weight-bold' type='submit' value='ENVIAR DATOS'>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--    fin boton de reefer-->

</div>
</body>