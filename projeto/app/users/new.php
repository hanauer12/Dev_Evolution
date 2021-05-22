<?php
  include '../../classes/session/Session.php';
  Session::validSession(true);
?>

<html>

<head>

<title>Edita Usuario </title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
	<div class="container">
	<div>
    <a href="../../index.php">Inicio</a>
 </div>
<form method="POST" action="action/save.php">

	

<div class = "row">

	<div class= "col">
		<input type="text" name="email" required class = "form-control" placeholder="Email...">
	</div>
	<div class="col">
		<input type="password" name="senha" required class = "form-control" placeholder="Senha...">
	</div>
	<div class="col">
		<input type="password" name="confirmar_senha" required class = "form-control" placeholder="Confirmar Senha">
	</div>

</div>


<?php
if ($_GET ['email_existente'] == 'true'){
	echo '<div class="alert alert-danger" role="alert">
	Email ja existente!
	</div>';
}
?>
<br>



<!-- botao cadastrar --> 

<button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

</body>