{{> header}}
<section class="contenedor-login">
        <article>
            <img class="logoBlanco" id="logoBlanco" src="../public/img/logoBlanco.svg"
                 alt="">
            <div class="text-login">
                <h2>Aplication Login Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </article>
        <article>
        <form action='/Register/addUser' method='post' id="formRegister">
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
                    <input type='submit' class="input-submit" id="inputRegister" value='Enviar' >
                </div>
            </form>
        </article>
    </section>

{{> footer}}
