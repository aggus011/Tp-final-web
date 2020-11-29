{{> header}}
<section class="contenedor-login" style="margin-left: 70px">
        <form action='/CargaProforma/addProforma' method='post' id="formRegister" style="width: 80%;" class="ml-5 mt-5">
        <label>Datos Cliente</label>
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

                <label>Datos Viaje</label>

                <label>Direccion Origen</label>
                <div class="grupo-login">
                    <input type='text' name='calleViajeOrigen' id='calleViajeOrigen' autocomplete='off' required>
                    <label for='calleViajeOrigen'>Calle Origen</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjcalleViajeOrigen"></small>
                </div>
                <div class="grupo-login">
                    <input type='number' name='numeroViajeOrigen' id='numeroViajeOrigen' autocomplete='off' required>
                    <label for='numeroViajeOrigen'>Numero Origen</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjnumeroViajeOrigen"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='localidadViajeOrigen' id='localidadViajeOrigen' autocomplete='off' required>
                    <label for='localidadViajeOrigen'>Localidad Origen</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjlocalidadViajeOrigen"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='provinciaViajeOrigen' id='provinciaViajeOrigen' autocomplete='off' required>
                    <label for='provinciaViajeOrigen'>Provincia Origen</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjprovinciaViajeOrigen"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='paisViajeOrigen' id='paisViajeOrigen' autocomplete='off' required>
                    <label for='paisViajeOrigen'>País Origen</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPaisViajeOrigen"></small>
                </div>
                <label>Direccion Destino</label>
                <div class="grupo-login">
                    <input type='text' name='calleViajeDestino' id='calleViajeDestino' autocomplete='off' required>
                    <label for='calleViajeDestino'>Calle Destino</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjcalleViajeDestino"></small>
                </div>
                <div class="grupo-login">
                    <input type='number' name='numeroViajeDestino' id='numeroViajeDestino' autocomplete='off' required>
                    <label for='numeroViajeDestino'>Numero Destino</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjnumeroViajeDestino"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='localidadViajeDestino' id='localidadViajeDestino' autocomplete='off' required>
                    <label for='localidadViajeDestino'>Localidad Destino</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjlocalidadViajeDestino"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='provinciaViajeDestino' id='provinciaViajeDestino' autocomplete='off' required>
                    <label for='provinciaViajeDestino'>Provincia Destino</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjprovinciaViajeDestino"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='paisViajeDestino' id='paisViajeDestino' autocomplete='off' required>
                    <label for='paisViajeDestino'>País Destino</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPaisViajeDestino"></small>
                </div>

                <div class='contenedor-submit'>
                    <input type='submit' class="input-submit" id="inputRegister" value='Enviar' >
                </div>
               
            </form>
    </section>
{{> footer}}