<?php
include('./conecta.php');

$fecha = $_POST['id'] ;


$sql = "UPDATE `os` SET `Fechado` = '0' WHERE `os`.`id` = $fecha";

$result = mysqli_query($link, $sql);
header('Location: index.php');

?>