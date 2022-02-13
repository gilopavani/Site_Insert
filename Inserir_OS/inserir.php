<?php
include('../conecta.php');

$nome = $_POST['nome'] ;
$numero_os = $_POST['numero_os'];
$equipamento = $_POST['equipa'];
$status = $_POST['status'];
$prioridade = $_POST['prioridade'];
$data_prev = $_POST['date'];
$tempo_prev = $_POST['time'];

echo $nome ."<br> ";
echo $numero_os ." <br>";
echo $equipamento . "<br>";
echo $status . "<br>";
echo $prioridade . "<br>";
echo $data_prev . "<br>";
echo $tempo_prev . "<br>";

/*
$sql = "INSERT INTO `os` ( `Nome`, `numero_os`, `previa`, `status`, `color`) VALUES ( '$nome', '$numero_os', '$equipamento', '$status', '$prioridade')";
*/
if($tempo_prev == null or $tempo_prev == ''){
      $tempo_prev = '00:00:00';
}
$hoje = date("Y-m-d"); 
$data_prevista = strtotime($data_prev);

if($data_prevista < $hoje){
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
      mysqli_close($link);
}

$sql2 = $link->query("SELECT * FROM os WHERE numero_os='$numero_os'");
if(mysqli_num_rows($sql2) > 0){
      echo "New record created successfully";
	      header('Location: erro.html');
	exit();
}

$sql = "INSERT INTO `os` ( `Nome`, `numero_os`, `previa`, `status`, `color`,`Fechado`,`data_prev`,`tempo_prev`,`data_abert`) VALUES ( '$nome', '$numero_os', '$equipamento', '$status', '$prioridade','1','$data_prev','$tempo_prev','$hoje')";
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