<?php

    //define('HOST', 'localhost');
    //define('USER', 'root');
    //define('PASS', 'root');
    //define('BASE', 'cadastro');

    //$conn = new mysqli(HOST, USER, PASS, BASE);


    $localhost = "localhost";
    $user = "root";
    $passw = "root";
    $banco = "cadastro";

    global $pdo;
    try{
        //estrutural orientada a objetos
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "ERRO: " .$e->getMessage();
        exit;
    }

?>