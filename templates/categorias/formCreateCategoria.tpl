{include file='../header.tpl'}
<a href="categorias">ABM Categorías</a> |
<a href="home">ABM Celulares</a>
<div class="row">
	<div class="col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
      	<form action="setCategoria" method="POST" class="create form-signin">
        	<input type="text" name="id_marca" id="inputText" class="form-control" placeholder="id_marca" required autofocus>
        	<input type="text" name="nombre" id="inputText" class="form-control" placeholder="nombre" required autofocus>
          <input type="text" name="descripcion" id="inputText" class="form-control" placeholder="descripcion" required autofocus>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Cargar</button>
      	</form>
    </div>
</div>
{include file='../footer.tpl'}