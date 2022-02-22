<?php
//Incluir a conexão com banco de dados
include_once '../conecta.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
$consulta = "SELECT * FROM os";
$con = $link->query($consulta) or die ($link->error);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM os WHERE numero_os LIKE '%$usuarios%' LIMIT 1000";
$resultado_user = mysqli_query($link, $result_user);

$consulta = "SELECT * FROM os WHERE `color` = '1'";
$consulta2 = "SELECT * FROM os WHERE `color` = '2'";
$consulta3 = "SELECT * FROM os WHERE `color` = '3'";
$consulta4 = "SELECT * FROM os WHERE `color` = '4'";

$con = $link->query($consulta) or die ($link->error); 
$con2 = $link->query($consulta2) or die ($link->error); 
$con3 = $link->query($consulta3) or die ($link->error); 
$con4 = $link->query($consulta4) or die ($link->error); 

echo '
<div class="row header">
	<div class="cell">
		Nome Cliente
	</div>
	<div class="cell">
		O.S.
	</div>
	<div class="cell">
		Prévia
	</div>
	<div class="cell">
		Status
	</div>
	<div class="cell">
		Prioridade
	</div>
	<div class="cell">
		Fechamento
	</div>
</div>

';

						
while($dados = $con4->fetch_array()){
	$nome = $dados["Nome"] ;
	$numero = $dados["numero_os"] ;
	$status= $dados["status"] ;
	$previa= $dados["previa"] ; 
	$color = $dados["color"] ;
	$id = $dados["id"];


if($dados["Fechado"] == 1 ){
	
echo '
<div class="row'.$color.'">
	<div class="cell" data-title="Full Name" >
		'.$nome.'
	</div>
	<div class="cell" data-title="Age">
		'.$numero.'								
	</div>
	<div class="cell" data-title="Job Title">
		'.$status.'							
	</div>
	<div class="cell" data-title="Job Title">
		'.$previa.'								
	</div>
	<div class="cell" data-title="Location">
		'.$color.'								
	</div>
	<div class="cell">
		<button type="button" class="button-9" name = "id" value = '.$id.' role="button" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$id.'">FECHAR</button>
	</div>

</div>	

';
	
}
	
}
while($dados = $con3->fetch_array()){
	$nome = $dados["Nome"] ;
	$numero = $dados["numero_os"] ;
	$status= $dados["status"] ;
	$previa= $dados["previa"] ; 
	$color = $dados["color"] ;
	$id = $dados["id"];


if($dados["Fechado"] == 1 ){
	
echo '
<div class="row'.$color.'">
	<div class="cell" data-title="Full Name">
		'.$nome.'
	</div>
	<div class="cell" data-title="Age">
		'.$numero.'								
	</div>
	<div class="cell" data-title="Job Title">
		'.$status.'							
	</div>
	<div class="cell" data-title="Job Title">
		'.$previa.'								
	</div>
	<div class="cell" data-title="Location">
		'.$color.'								
	</div>
	<div class="cell">
		<button type="button" class="button-9" role="button" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$id.'">FECHAR</button>
	</div>

</div>	

';
	
}
	
}
while($dados = $con2->fetch_array()){
	$nome = $dados["Nome"] ;
	$numero = $dados["numero_os"] ;
	$status= $dados["status"] ;
	$previa= $dados["previa"] ; 
	$color = $dados["color"] ;
	$id = $dados["id"];


if($dados["Fechado"] == 1 ){
	
echo '
<div class="row'.$color.'">
	<div class="cell" data-title="Full Name">
		'.$nome.'
	</div>
	<div class="cell" data-title="Age">
		'.$numero.'								
	</div>
	<div class="cell" data-title="Job Title">
		'.$status.'							
	</div>
	<div class="cell" data-title="Job Title">
		'.$previa.'								
	</div>
	<div class="cell" data-title="Location">
		'.$color.'								
	</div>
	<div class="cell">
		<button type="button" class="button-9" name = "id" value = '.$id.' role="button" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$id.'">FECHAR</button>
	</div>

</div>	

';
	
}
	
}
while($dados = $con->fetch_array()){
	$nome = $dados["Nome"] ;
	$numero = $dados["numero_os"] ;
	$status= $dados["status"] ;
	$previa= $dados["previa"] ; 
	$color = $dados["color"] ;
	$id = $dados["id"];


if($dados["Fechado"] == 1 ){
	
echo '
<div class="row'.$color.'">
	<div class="cell" data-title="Full Name">
		'.$nome.'
	</div>
	<div class="cell" data-title="Age">
		'.$numero.'								
	</div>
	<div class="cell" data-title="Job Title">
		'.$status.'							
	</div>
	<div class="cell" data-title="Job Title">
		'.$previa.'								
	</div>
	<div class="cell" data-title="Location">
		'.$color.'								
	</div>
	<div class="cell">
		<button type="button" class="button-9" name = "id" value = '.$id.' role="button" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$id.'">FECHAR</button>
	</div>

</div>	

';
	
}
	
}