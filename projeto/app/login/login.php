<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/projeto/';


require $dirProjeto . 'classes/db/MySQL.php';



$MySQL = new MySQL();
$DB = $MySQL->connectDB();
$email = addslashes(($_POST['email']));
$senha = addslashes(($_POST['password']));


//var_dump("SELECT id FROM user WHERE email = '$email' AND senha = '$senha'");
//exit;

if ($email && $senha){
    $senha = sha1($senha);
    $queryLogin = $DB->query("SELECT id FROM user WHERE email = '$email' AND senha = '$senha'" );

    if ($queryLogin->num_rows == 1){
        include '../../classes/session/Session.php';
        Session::initSession($email);
        header ('Location: ../../index.php');
    
    }else{
        header ("Location: ../../login.php?erro_login=true");
    }
}
