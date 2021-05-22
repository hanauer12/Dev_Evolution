<?php
include '../../classes/session/Session.php';
Session::validSession(true);

$id = $_GET['id'];
include 'action/recovery.php';

?>

<html>
<head>
    <title>Editar Veiculo</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

<div class="container">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Veiculo</li>
        </ol>
    </nav>

    <h1>Editando Veiculo <a href="list.php"><button class="btn btn-success" type="button">Visualizar todos</button></a></h1>

    <form method="POST" action="action/update.php">

        <div class="row">
            <div class="col">
                <input type="text" readonly name="id" required class="form-control" value="<?php echo $dadosveiculo['id'] ?>">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <input type="marca" name="marca" required class="form-control" value="<?php echo $dadosveiculo['marca'] ?>" placeholder="Marca">
            </div>
            <div class="col">
                <input type="text" name="modelo" required class="form-control" value="<?php echo $dadosveiculo['modelo'] ?>" placeholder="Modelo">
            </div>
            <div class="col">
                <input type="text" name="ano" required class="form-control" value="<?php echo $dadosveiculo['ano'] ?>" placeholder="ano">
            </div>
            <div class="col">
                <input type="text" name="valor" required class="form-control" value="<?php echo $dadosveiculo['valor'] ?>" placeholder="valor">
            </div>
        </div>
        <br>
       
        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>
</div>

</body>

</html>
