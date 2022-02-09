<?php
$host = 'sql10.freemysqlhosting.net';
$tabela = "sql10471383";
$usuario = "sql10471383";
$senha = "XZBAD7LNrR";
// Create connection
$link = mysqli_connect ($host, $usuario,$senha, $tabela);

// Check connection
if (mysqli_connect_errno($link)) {
    echo "Connection failed: ";
	
}

?>