<?php

if ($id > 0){
    $dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/projeto/';
    require $dirProjeto . 'classes/db/MySQL.php';

    $MySQL = new MySQL();
    $DB = $MySQL->connectDB();

    $usuario = $MySQL->getOneByKey($DB, "*", 'user', $id);
    $dadosUsuario = $usuario->fetch_assoc();
}

