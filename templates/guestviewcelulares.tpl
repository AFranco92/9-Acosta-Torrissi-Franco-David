<h2>{$titulo}</h2>
<div class="row">
<div class="col-md-6">          
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
        <td>
          {$celular['modelo']}
        </td>
        <td>
          {$celular['caracteristicas']}
        </td>
        <td>
          {$celular['precio']}
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
</div>
</div>