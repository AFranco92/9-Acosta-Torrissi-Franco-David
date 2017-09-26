<h2>Marcas</h2>
<div class="row">
<div class="col-md-6">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$marcas item=marca}
      <tr>
        <td>
          {$marca['nombre']}
        </td>
        <td>
          {$marca['descripcion']}
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
</div>
</div>