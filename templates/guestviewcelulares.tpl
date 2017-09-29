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
          <s>{$celular['modelo']}</s>
        </td>
        <td>
          <s>{$celular['caracteristicas']}</s>
        </td>
        <td>
          <s>{$celular['precio']}</s>
        </td>
        {else}
        <td>
          {$celular['modelo']}
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