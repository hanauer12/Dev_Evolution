<?php
  include '../../classes/session/Session.php';
  Session::validSession(true);
?>

<html>

<head>

<title>Visualizar Veiculos </title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
<div class = "container">
<div>
    <a href="../../index.php">Inicio</a>
 </div>

<h1> Veiculos <a href="new.php"><button class="btn btn-success" type="button">Cadastrar</button> </a>

<table class = "table">
<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">Marca</th>
    <th scope="col">Modelo</th>
    <th scope="col">Ano</th>
    <th scope="col">Valor</th>
    <th scope="col">Açoes</th>
    
</tr>
</thead>

<tbody>
<?php 



include 'action/select.php';
if ($veiculos){
    foreach ($veiculos as $veiculo){
        echo '<tr>';
        echo '<td>' . $veiculo['id'] .' </td>';
        echo '<td>' . $veiculo['marca'] .' </td>';
        echo '<td>' . $veiculo['modelo'] .' </td>';
        echo '<td>' . $veiculo['ano'] .' </td>';
        echo '<td>' . $veiculo['valor'] .' </td>';
        echo '<td> 
            <a href="action/delete.php?id=' . $veiculo['id'] . '">
        <button type="button" class="btn btn-danger">Deletar</button>
        </a>
        </td<';


        echo '<td> 
        <a href="edit.php?id=' . $veiculo['id'] . '">
        <button type="button" class="btn btn-danger">Editar</button>
        </a>
         </td<';
        echo '</tr>';
        } 

}
?>

</tbody>

</table>

</body>

</html>