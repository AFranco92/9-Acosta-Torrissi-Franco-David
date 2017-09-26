<h2>{$titulo}</h2>
<p>Se observan los celulares cargados hasta el momento:</p>
<div class="row">
<div class="col-md-12">          
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
        {if $celular['stock']}
        <td>
          <s>{$celular['id_celular']}</s>
        </td>
        <td>
          <s>{$celular['modelo']}</s>
        </td>
        <td>
          <s>{$celular['caracteristicas']}</s>
        </td>
        <td>
          <s>{$celular['precio']}</s>
        </td>
        <td>
          <s>{$celular['id_marca']}</s>
        </td>
        {else}
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
        {/if}
        <td>
          <a class="boton" href="setNoStock/{$celular['id_celular']}">[Sin stock]</a>
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