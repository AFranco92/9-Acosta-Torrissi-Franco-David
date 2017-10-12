<h2>{$titulo}</h2>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Características</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$celulares item=celular}
      <tr>
        {if $celular['stock']}
        <td>
          <strong>{$celular['modelo']}</strong>
        </td>
        <td>
          {$celular['caracteristicas']}
        </td>
        <td>
          {$celular['precio']}<p class="stock">Sin stock</p>
        </td>
        {else}
        <td>
          <strong>{$celular['modelo']}</strong>
        </td>
        <td>
          {$celular['caracteristicas']}
        </td>
        <td>
          {$celular['precio']}
        </td>
        {/if}
      </tr>
    {/foreach}
  </tbody>
</table>