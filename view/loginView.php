{{> header}}
<main>
    <section class='fondo-modal' id='fondo-modal'>
        <article class='contenedor-form-modal modal-anim'>
            <span class="modal-cerrar">&times;</span>
            <div class="contenedor-titulo-modal">
                <h3>Formulario de Registro</h3>
            </div>
            <form action='#' method='post' id="formRegister">
                <div class="grupo-login">
                    <input type="text" name="nombreRegister" id="nombreRegister" autocomplete='off' required>
                    <label for="nombreRegister">Nombre</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjNombreRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type="text" name="apellidoRegister" id="apellidoRegister" autocomplete='off' required>
                    <label for="apellidoRegister">Apellido</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjApellidoRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type="text" name="documentoRegister" id="documentoRegister" required>
                    <label for="documentoRegister">Numero de documento</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjDocumentoRegister"></small>
                </div>
                <!--                <div class="grupo-login">-->
                <!--                    <input type="date" name="fechaNacimientoRegister" id="fechaNacimientoRegister" required>-->
                <!--                    <label for="fechaNacimientoRegister">Fecha de nacimiento</label>-->
                <!--                    <span class="input-bar"></span>-->
                <!--                    <small class="mensajeError" id="msjFechaNacimiento"></small>-->
                <!--                </div>-->
                <div class="grupo-login">
                    <input type="text" name="telefonoRegister" id="telefonoRegister" required>
                    <label for="telefonoRegister">Telefono de contacto</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjTelefonoRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='usuarioRegister' id='usuarioRegister' autocomplete='off' required>
                    <label for='usuarioRegister'>Nombre de usuario</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjUsuarioRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='emailRegister' id='emailRegister' autocomplete='off' required>
                    <label for='emailRegister'>Email</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjEmailRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type="text" name="passwordRegister" id="passwordRegister" required>
                    <label for='passwordRegister'>Contraseña</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPasswordRegister"></small>
                </div>
                <div class='contenedor-submit'>
                    <input type='submit' class="input-submit" id="inputRegister" value='Enviar' disabled>
                </div>
            </form>
        </article>
    </section>
    <section class="contenedor-login">
        <article>
            <img class="logoBlanco" id="logoBlanco" src="/Tp-final-web/public/img/logoBlanco.svg"
                 alt="">
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
                    <input type="submit" value="Submit" id="inputLogin" class="input-submit" disabled>
                    <a href="javascript:void(0)" class="linkRegister" id="linkRegister">Register</a>
                </div>
            </form>
        </article>
    </section>
</main>
{{> footer}}
