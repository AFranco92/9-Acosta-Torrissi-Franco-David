<h2>Categorías</h2>
<p>Se observan todas las categorías:</p>
<div class="row">
<div class="col-md-6">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_marca</th>
        <th>Nombre</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$categorias item=categoria}
      <tr>
        <td>
          {$categoria['id_marca']}
        </td>
        <td>
          {$categoria['nombre']}
        </td>
        <td>
          {$categoria['descripcion']}
        </td>
        <td>
          <a href="updateCategoria/{$categoria['id_marca']}">Editar</a>
        </td>
        <td>
          <a href="deleteCategoria/{$categoria['id_marca']}">[X]</a>
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
</div>
</div>