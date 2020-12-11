{{> headerSuper}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h1>Vehiculos</h1>
  <h2>Arrastrados</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
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
          <td>{{idArrastrado}}</td>
          <td>{{patenteArrastrado}} </td>
          <td>{{tipo}}</td>
          <td>{{chasis}}</td>
        </tr>
{{/arrastrados}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}