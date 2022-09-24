<?php

require_once '../db/conection.php';

if (isset($POST['criar'])) {
    
    $nameBolao = $POST['nameBolao'];
    $qtdUsers = $POST['qtdUsers'];
    $description = $POST['description'];
    $password = $POST['password'];
    $confirmPassword = $POST['confirmPassword'];
    $bolaoPrivate = $POST['bolaoPrivate'];

    $sql_create_bolao = "INSERT INTO boloes(nameBolao, qtdUsers, description, password, bolaoPrivate) VALUES ($nameBolao, $qtdUsers, $description, $password, $bolaoPrivate)";

    $insert = $mysqli->query($sql_create_bolao);

    if(!$insert)
        $erro[] = "Falha ao criar bolão " . $mysqli->error;
    else 
        $msg = 200; //Created
        return ($msg);
}

