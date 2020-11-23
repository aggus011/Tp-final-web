{{> header}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>nombre</th>
          <th>apellido</th>
          <th>documento</th>
          <th>nombre de usuario</th>
          <th>rol</th>
          <th>estado</th>
          <th>editar</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
{{#usuarios}}
        <tr>
          <td>{{nombre}}</td>
          <td>{{apellido}} </td>
          <td>{{documento}}</td>
          <td>{{nombreUsuario}}</td>
          <td>{{fk_Usuario_Role}}</td>
          <td>{{estado}}</td>
            <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{nombreUsuario}}'>
                    Modificar
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='modificar{{nombreUsuario}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Modificar Usuario</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Modificando a {{nombreUsuario}}</h5>
                                <form  action='ABMUsuarios/modificarRol' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="nick" value="{{nombreUsuario}}">
                                    <label>Modificar rol</label>
                                    <select class='form-control  mt-2' name="rol" required>
                                        <option value=''>Elige rol</option>
                                        <option>admin</option>
                                        <option>chofer</option>
                                        <option>supervisor</option>
                                        <option value="encargadoTaller">encargado</option>
                                        <option>sin rol</option>
                                    </select>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Modificar rol'>
                                </form><br>
                                <form  action='ABMUsuarios/modificarEstado' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="nick" value="{{nombreUsuario}}">
                                    <label>Modificar estado</label>
                                    <select class='form-control  mt-2' name="estado" required>
                                        <option value=''>Elige estado</option>
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                    </select>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Modificar estado'>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div></td>
        </tr>
{{/usuarios}}
        <tr>
          <td>AAD</td>
          <td>AUSENCO</td>
          <td>$2.38</td>
          <td>-0.01</td>
          <td>-1.36%</td>
        </tr>
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAC</td>-->
<!--          <td>AUSTRALIAN COMPANY </td>-->
<!--          <td>$1.38</td>-->
<!--          <td>+2.01</td>-->
<!--          <td>-0.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAD</td>-->
<!--          <td>AUSENCO</td>-->
<!--          <td>$2.38</td>-->
<!--          <td>-0.01</td>-->
<!--          <td>-1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>AAX</td>-->
<!--          <td>ADELAIDE</td>-->
<!--          <td>$3.22</td>-->
<!--          <td>+0.01</td>-->
<!--          <td>+1.36%</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <td>XXD</td>-->
<!--          <td>ADITYA BIRLA</td>-->
<!--          <td>$1.02</td>-->
<!--          <td>-1.01</td>-->
<!--          <td>+2.36%</td>-->
<!--        </tr>-->
      </tbody>
    </table>
  </div>
</section>
</section>
  <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="/homeAdmin">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="/ABMUsuarios">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Usuarios
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Quotes
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
{{> footer}}