{{> headerSuper}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<br>
<h1>Vehiculos</h1>
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h2>Arrastrados</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Patente</th>
          <th>Tipo</th>
          <th>Chasis</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
{{#arrastrados}}
        <tr>
          <td>{{patenteArrastrado}} </td>
          <td>{{tipo}}</td>
          <td>{{chasis}}</td>
        </tr>
{{/arrastrados}}
      </tbody>
    </table>
  </div>
</section>

<section>
  <!--for demo wrap-->
  <h2>Tractores</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Patente</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Motor</th>
          <th>Chasis</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
{{#arrastrados}}
        <tr>
          <td>{{patenteTractor}} </td>
          <td>{{marca}}</td>
          <td>{{modelo}}</td>
          <td>{{motor}}</td>
          <td>{{chasis}}</td>
        </tr>
{{/arrastrados}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}