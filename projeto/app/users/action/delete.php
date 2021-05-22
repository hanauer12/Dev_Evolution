<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/projeto/';


require $dirProjeto . 'classes/db/MySQL.php';



$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);
$MySQL->deletedByID($DB, 'user', $id);
header ('Location: ../list.php');
