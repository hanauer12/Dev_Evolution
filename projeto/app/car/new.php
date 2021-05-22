<?php
  include '../../classes/session/Session.php';
  Session::validSession(true);
?>

<html>

<head>

<title>Cadastrar Veiculo </title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
	<div class="container">
	<div>
    <a href="../../index.php">Inicio</a>
 </div>
<form method="POST" action="action/save.php">

		<h1> Cadastrar veiculo </h1>
		<div class="form-group">
		<label for="marca"> Marca</label>

			<select class="form-control" required name="marca">

			<option value="Chevrolet">Chevrolet</option>
			<option value="Fiat">Fiat</option>
			<option value="Ford">Ford</option>
			<option value="Volskwagem">Volskwagem</option>

		</select>
		<small class="form-text text-muted">Selecione a marca do veiculo.</small>
</div>

<div class = "row">

	<div class= "col">
		<input type="text" name="modelo" required class = "form-control" placeholder="Modelo...">
	</div>
	<div class="col">
		<input type="number" name="ano" required class = "form-control" placeholder="Ano...">
	</div>
	<div class="col">
		<input type="number" name="valor" required class = "form-control" placeholder="Valor...">
	</div>

</div>
<br>
<!-- campo obs -->

<div class="form_group">
	<label for="obs">Obs:</label>
	<textarea class="form-control" name="obs" rows="2"></textarea>
</div>

<br>

<!-- botao cadastrar --> 

<button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

</body>