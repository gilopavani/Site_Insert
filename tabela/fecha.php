<?php
include('../conecta.php');

$fecha = $_POST['id'] ;
$nome = $_POST['tecnico'] ;

echo $fecha;
echo "<br>";
echo $nome;

$sql = "UPDATE `os` SET `Fechado` = '0', `tecnico` = '$nome' WHERE (id = '$fecha') ";

$result = mysqli_query($link, $sql);
header('Location: index.php');


?>