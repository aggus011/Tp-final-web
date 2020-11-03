<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport Express</title>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<main>
    <section class="contenedor-login">
        <article>
            <img class="logoBlanco" id="logoBlanco" src="./assets/img/logo/svg/logoBlanco.svg" alt="">
            <div class="text-login">
                <h2>Aplication Login Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </article>
        <article>
            <form action="#" method="post" class="formLogin" id="formLogin">
                <div class="grupo-login">
                    <input type="text" name="nombre" id="nombre" required>
                    <label for="nombre">User Name</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjNombreUsuario"></small>
                </div>
                <div class="grupo-login">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPassword"></small>
                </div>
                <div class="contenedor-submit">
                    <input type="submit" value="Submit" id="submit" disabled>
                    <a href="javascript:void(0)" class="linkRegister" id="linkRegister">Register</a>
                </div>
            </form>
        </article>
    </section>
</main>
<footer>

</footer>
<script src="./assets/js/main.js"></script>
</body>
</html>
