{{> header}}
<div style='margin-left:80px;margin-right: 15px;'>
    <br>
       
                <form  action='/ABMClientes/InsertaCliente' enctype='multipart/form-data' method='post' class="row">
                <div class="col-5">
                <h4>Datos cliente</h4>
                    <div class="grupo-login" >
                        <input type='text' name='nombreClienteProforma' id='nombreClienteProforma' autocomplete='off' required>
                        <label for='nombreClienteProforma'>Nombre</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjnombreClienteProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='apellidoClienteProforma' id='apellidoClienteProforma' autocomplete='off' required>
                        <label for='apellidoClienteProforma'>Apellido</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjapellidoClienteProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='denominacionProforma' id='denominacionProforma' autocomplete='off' required>
                        <label for='denominacionProforma'>Denominacion</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjdenominacionProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='number' name='CuitProforma' id='CuitProforma' autocomplete='off' required>
                        <label for='CuitProforma'>Cuit o Cuil</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjCuitProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='number' name='TelefonoProforma' id='TelefonoProforma' autocomplete='off' required>
                        <label for='TelefonoProforma'>Telefono</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjTelefonoProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='EmailProforma' id='EmailProforma' autocomplete='off' required>
                        <label for='EmailProforma'>Email</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjEmailProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='contacto1Proforma' id='contacto1Proforma' autocomplete='off' required>
                        <label for='contacto1Proforma'>Contacto 1</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjcontacto1Proforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='contacto2Proforma' id='contacto2Proforma' autocomplete='off' required>
                        <label for='contacto2Proforma'>Contacto 2</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjcontacto2Proforma"></small>
                    </div>
                </div>
                <div class="col-5">
                <h4>Datos Direccion cliente</h4>
                    <div class="grupo-login">
                        <input type='text' name='calleProforma' id='calleProforma' autocomplete='off' required>
                        <label for='calleProforma'>Calle</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjcalleProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='number' name='numeroProforma' id='numeroProforma' autocomplete='off' required>
                        <label for='numeroProforma'>Numero</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjnumeroProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='localidadProforma' id='localidadProforma' autocomplete='off' required>
                        <label for='localidadProforma'>Localidad</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjlocalidadProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='provinciaProforma' id='provinciaProforma' autocomplete='off' required>
                        <label for='provinciaProforma'>Provincia</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjprovinciaProforma"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='paisProforma' id='paisProforma' autocomplete='off' required>
                        <label for='paisProforma'>País</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjPaisProforma"></small>
                    </div>
                    </div>
                    <input type='submit' class="input-submit" id="inputCliente" value='Enviar' class="ml-5">
                <form>
                    
<div>