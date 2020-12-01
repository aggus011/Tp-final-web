{{> header}}
<div style='margin-left:80px;margin-right: 15px;'>
    <br>
        <h4>Datos cliente</h4>
                <form  action='/CargaProforma/cargaProforma' enctype='multipart/form-data' method='post'>
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
                    <h4>Direccion de Origen del Viaje</h4>
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

                    <h4>Direccion de Destino del Viaje</h4>
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

                <h4>Carga del Viaje</h4>
                <div class="grupo-login">

                    <label style=" top: -20px; left: -5px; font-size: 12px; color: #3a7bd5; ">Tipo de carga</label><br>
                    <select class="form-control" name="tipoCarga">
                        <option>Granel</option>
                        <option>Liquida</option>
                        <option>Container 20´</option>
                        <option>Container 40´</option>
                        <option>Jaula</option>
                        <option>CarCarrier</option>
                    </select>
<!--                    <span>-->
<!--                        <input type="radio" name="" >-->
<!--                    </span>-->
                </div>
                <div class="grupo-login">

                    <input name='pesoCarga' id='localidadViajeDestino' type='number' min="1" autocomplete='off' required>
                    <label  for='localidadViajeDestino'>Peso Neto</label><br>


                </div>
                <div class="grupo-login">
                    <label style=" top: -20px; left: -5px; font-size: 12px; color: #3a7bd5; ">Hazard</label><br>
                    <span>
                        <input type="radio" name="hazard" value="si"> si
                        <input type="radio" name="hazard" value="no"checked> no
                    </span>
                    <select class="form-control" name="claseHazard">
                        <option value="">En caso afirmativo elija N° de clase</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                </div>
                <div class="grupo-login">
                    <label style=" top: -20px; left: -5px; font-size: 12px; color: #3a7bd5; ">Reefer</label><br>
                    <span>
                        <input type="radio" name="reefer" value="si"> si
                        <input type="radio" name="reefer" value="no" checked> no
                    </span>
                    <input type='number' name='temperaturaReefer' placeholder="En caso afirmativo indique temperatura en celcius" autocomplete='off'>
                </div>
                    <h4>Costeo estimado</h4>
                    <div>
                        <label style="font-size: 12px; color: #3a7bd5; ">Kilometros por recorrer</label><br>
                        <input class="form-control" type='number' name='kilometrosEstimado' placeholder="Kilometros estimados" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Combustible estimado</label><br>
                        <input class="form-control"  type='number' name='combustiblesEstimado' placeholder="Combustible en litros estimados" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">ETD</label><br>
                        <input class="form-control"  type='number' name='etd' placeholder="Tiempo estimado de salida (en horas)" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">ETA</label><br>
                        <input class="form-control"  type='number' name='eta' placeholder="Tiempo estimado de llegada (en horas)" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Viaticos estimados</label><br>
                        <input class="form-control"  type='number' name='viaticoEstimado' placeholder="Costo viaticos estimados" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Peajes y pasajes </label><br>
                        <input class="form-control"  type='number' name='peypaEstimado' placeholder="Costo peajes y pasajes estimados" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Extras</label><br>
                        <input class="form-control"  type='number' name='extrasEstimado' placeholder="Costo extras estimados" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Costo hazard</label><br>
                        <input class="form-control"  type='number' name='hazardEstimado' placeholder="Costo hazard estimado" autocomplete='off'><br>
                        <label style="font-size: 12px; color: #3a7bd5; ">Costo Reefer </label><br>
                        <input class="form-control"  type='number' name='reeferEstimado' placeholder="Costo reefer estimados" autocomplete='off'><br>
                    </div>
    <div class="grupo-login">
        <input type='submit' class="input-submit" id="inputRegister" value='Enviar' ></div>
                </form>
</div>

{{> footer}}