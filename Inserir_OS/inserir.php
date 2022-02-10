<?php
include('../conecta.php');

$nome = $_POST['nome'] ;
$numero_os = $_POST['numero_os'];
$equipamento = $_POST['equipa'];
$status = $_POST['status'];
$prioridade = $_POST['prioridade'];

echo $nome ."<br> ";
echo $numero_os ." <br>";
echo $equipamento . "<br>";
echo $status . "<br>";
echo $prioridade . "<br>";

/*
$sql = "INSERT INTO `os` ( `Nome`, `numero_os`, `previa`, `status`, `color`) VALUES ( '$nome', '$numero_os', '$equipamento', '$status', '$prioridade')";
*/
$sql = "INSERT INTO `os` ( `Nome`, `numero_os`, `previa`, `status`, `color`,`Fechado`) VALUES ( '$nome', '$numero_os', '$equipamento', '$status', '$prioridade','1')";
$result = mysqli_query($link, $sql);
if ($result) {
      echo "New record created successfully";
	  header('Location: salvar.html');
	  exit();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);


?>