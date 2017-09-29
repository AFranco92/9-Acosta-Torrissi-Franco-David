<h2>Marcas</h2>
<p>Se observan todas las marcas:</p>
<div class="row">
<div class="table-responsive col-md-12">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_marca</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th><a href="addMarca">[+]</a></th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$marcas item=marca}
      <tr>
        <td>
          {$marca['id_marca']}
        </td>
        <td>
          {$marca['nombre']}
        </td>
        <td>
          {$marca['descripcion']}
        </td>
        <td>
          <a class="boton" href="deleteMarca/{$marca['id_marca']}">[x]</a>
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
</div>
</div>