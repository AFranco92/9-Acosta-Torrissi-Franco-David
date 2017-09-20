<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<title>{$titulo}</title>
	</head>
	<body>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4">
      			<form class="create form-signin" action="">
        			<input type="text" name="marca" id="inputText" class="form-control" placeholder="Marca" required autofocus>
        			<input type="text" name="modelo" id="inputText" class="form-control" placeholder="Modelo" required autofocus>
        			<input type="text" name="características" id="inputText" class="form-control" placeholder="Características" required autofocus>
        			<input type="number" name="precio" id="inputNumber" class="form-control" placeholder="Precio" required autofocus>
        			<input type="number" name="id_categoria" id="inputNumber" class="form-control" placeholder="id_categoria" required autofocus>
        			<button class="btn btn-lg btn-primary btn-block" type="submit">Cargar</button>
      			</form>
    		</div>
		</div>
	</body>
</html>