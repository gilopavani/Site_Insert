<?php
/*
$host = "127.0.0.1:3307";
$tabela = "lista-os";
$usuario = "root";
$senha = "";
*/
$host = "us-cdbr-east-05.cleardb.net";
$tabela = "heroku_3166029c31857d1";
$usuario = "b7ee025ae16aa3";
$senha = "3a697031";

// Create connection
$link = mysqli_connect ($host, $usuario, $senha, $tabela);

// Check connection
if (mysqli_connect_errno($link)) {
    echo "Connection failed: ";
	
}

?>