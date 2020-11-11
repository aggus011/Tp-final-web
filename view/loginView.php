{{> header}}
<main>
    
    <section class="contenedor-login">
        <article>
            <img class="logoBlanco" id="logoBlanco" src="../public/img/logoBlanco.svg"
                 alt="">
            <div class="">
                {{#usuarios}}
                <h2>{{nombre}}</h2>
                <p>Login or register from here to access.</p>
                {{/usuarios}}
            </div>
        </article>
        <article>
            <form action="/login/insertUsuario" method="post" class="formLogin" id="formLogin">
                <div class="grupo-login">
                    <input type="text" name="nombre" id="nombre">
                    <label for="nombre">User Name</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjNombreUsuario"></small>
                </div>
                <div class="grupo-login">
                    <input type="password" name="password" id="password">
                    <label for="password">Password</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPassword"></small>
                </div>
                <?php !empty($errorMessage) ? print($errorMessage) : ''; ?>
                <div class="contenedor-submit">
                    <input type="submit" value="Submit" id="inputLogin" class="input-submit">
                    <a href="/register" class="linkRegister" id="linkRegister">Register</a>
                </div>
            </form>
        </article>
    </section>
</main>
{{> footer}}
<!-- rgba(63, 103, 158, 0.5) -->