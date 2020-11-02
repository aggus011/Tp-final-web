<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Express</title>
    <?php 
    include ("./recursos/templates/bootstrap.php");
    ?>
    <link rel="stylesheet" href="./recursos/css/general.css">
    <link rel="stylesheet" href="./recursos/css/index.css">
    <link rel="icon" href="./recursos/imagenes/Logo.svg" />
</head>
<header>
    <img src="./recursos/imagenes/LogoColor.svg" alt="logo" class="logo">
    <form action="#" method="post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Usuario">
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Inciar Sesi&oacuten</button>
            </div>
        </div>
    </form>
</header>

<body>
    <main>
        <h1 class="display-4 registro">Registrarse</h1>
        <form>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre completo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y apellido"
                    name="nombre">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">DNI</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="xxxxxxxx"
                    name="dni">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="nacimiento">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                    name="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Escriba una contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Contraseña"
                    name="contrasenia">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Repita la contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Contraseña"
                    name="contrasenia2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Elija su rol</label>
                <select class="form-control" id="exampleFormControlSelect1" name="rol">
                    <option value="non">--</option>
                    <option value="chofer">Chofer</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="mecanico">Mec&aacutenico</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
        </form>
    </main>
</body>
<footer>
</footer>

</html>