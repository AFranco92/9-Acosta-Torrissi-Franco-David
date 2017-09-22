<h2>{$titulo}</h2>
<p>Se observan los celulares cargados hasta el momento:</p>
<div class="row">
<div class="col-md-6">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_celular</th>
        <th>Modelo</th>
        <th>Características</th>
        <th>Precio</th>
        <th>id_marca</th>
        <th><a href="addCelular">[+]</a></th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$celulares item=celular}
      <tr>
        <td>
          {$celular['id_celular']}
        </td>
        <td>
          {$celular['modelo']}
        </td>
        <td>
          {$celular['caracteristicas']}
        </td>
        <td>
          {$celular['precio']}
        </td>
        <td>
          {$celular['id_marca']}
        </td>
        <td>
          <a class="boton" href="updateCelular/{$celular['id_celular']}">[Editar]</a>
        </td>
        <td>
          <a class="boton" href="deleteCelular/{$celular['id_celular']}">[x]</a>
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
</div>
</div>