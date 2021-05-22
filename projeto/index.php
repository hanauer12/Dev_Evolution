<?php
  include 'classes/session/Session.php';
  Session::validSession();
?>


<html>

<head>

<title>Cadastrar Veiculo </title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>


  <div class="container py-4">

<div>
  Seja bem vindo
   <?php
 session_start(); echo $_SESSION['email'];
  ?>
  <a href="logout.php">Sair </a>

   <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Cadastrar Veiculo</h2>
          <p>Cadastrar Veiculo</p>
          <a href="app/car/new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button> </a>
 
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Visualizar</h2>
           <p>Visualizar Veiculo</p>
          <a href="app/car/list.php"> <button class="btn btn-outline-secondary" type="button">Visualizar</button> </a>
        </div>
      </div>
    </div>
    
    <br>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-info rounded-3">
          <h2>Cadastrar Usuario</h2>
          <p>Cadastrar Usuario</p>
          <a href="app/users/new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button> </a>
 
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Visualizar Usuario</h2>
           <p>Visualizar Usuario</p>
          <a href="app/users/list.php"> <button class="btn btn-outline-secondary" type="button">Visualizar</button> </a>
        </div>
      </div>
    </div>




  </div>


</body>
</html>