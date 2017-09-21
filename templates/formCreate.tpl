{include file='header.tpl'}
<a href="categorias">ABM Categorías</a> |
<a href="home">ABM Celulares</a>
<div class="row">
	<div class="col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
      	<form action="setCelular" method="POST" class="create form-signin">
        	<input type="text" name="marca" id="inputText" class="form-control" placeholder="Marca" required autofocus>
        	<input type="text" name="modelo" id="inputText" class="form-control" placeholder="Modelo" required autofocus>
          <textarea name="caracteristicas" id="inputText" class="form-control" placeholder="Características" required autofocus></textarea>
        	<input type="number" name="precio" id="inputNumber" class="form-control" placeholder="Precio" required autofocus>
        	<input type="number" name="id_marca" id="inputNumber" class="form-control" placeholder="id_marca" required autofocus>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Cargar</button>
      	</form>
    </div>
</div>
{include file='footer.tpl'}