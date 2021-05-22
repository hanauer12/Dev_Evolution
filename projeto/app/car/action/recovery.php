<?php

if ($id > 0){
    $dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/projeto/';
    require $dirProjeto . 'classes/db/MySQL.php';

    $MySQL = new MySQL();
    $DB = $MySQL->connectDB();

    $veiculo = $MySQL->getOneByKey($DB, "*", 'cars', $id);
    $dadosveiculo = $veiculo->fetch_assoc();
}
