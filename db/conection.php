<?php

$host = "localhost";
$user = "root";
$password = "12345678";
$db = "system_bolao";

$mysqli = new mysqli($host, $user, $password, $db);
    if($mysqli->connect_errno) {
        echo "Falha ao conectar: ". $mysqli->connect_error;
        exit();
    }

?>