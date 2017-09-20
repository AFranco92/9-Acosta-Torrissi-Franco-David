<h2>{$titulo}</h2>
<p>Se observan los celulares cargados hasta el momento:</p>            
<table class="table table-striped">
  <thead>
    <tr>
      <th>id_celular</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Características</th>
      <th>Precio</th>
      <th>id_marca</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$celulares item=celular}
    <tr>
      <td>
        {$celular['id_celular']}
      </td>
      <td>
        {$celular['marca']}
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
      <a href="deleteCelular/{$celular['id_celular']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>