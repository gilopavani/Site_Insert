<?php
	session_start();
	if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
			header('location:../index.php');
		}
	include'../conecta.php';
	include'fil.php';
 
	$consulta = "SELECT * FROM os";

	
	
	$consulta = "SELECT * FROM os WHERE `color` = '1'";
	$consulta2 = "SELECT * FROM os WHERE `color` = '2'";
	$consulta3 = "SELECT * FROM os WHERE `color` = '3'";
	$consulta4 = "SELECT * FROM os WHERE `color` = '4'";

	$con = $link->query($consulta) or die ($link->error); 
	$con2 = $link->query($consulta2) or die ($link->error); 
	$con3 = $link->query($consulta3) or die ($link->error); 
	$con4 = $link->query($consulta4) or die ($link->error); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Tabela</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">




<nav class="nav">
    <button class="toggle-menu">
      <span></span>
	</button>
</nav>

</head>
<body>
	<!--=========================Menu======================================================================-->
	
	<div id="menu" class="">
		<nav class="main-nav">
		  <ul>
			<li>
			  <a href="index.php">
				O.S. Aberta
			  </a>
			</li>
			<li>
			  <a href="../Inserir_OS/abriros.html">
				Abrir O.S.
			  </a>
			</li>
			
			<li>
			  <a href="../sair.php">
				Sair
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
	  <!--=======================================Menu========================================================-->
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<form action = "fecha.php" method="POST">
					<div class="table">

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
						<?php
						
						
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$dados["id"].'" data-whatevernome="'.$nome.'">Fechar</button>
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$dados["id"].'" data-whatevernome="'.$nome.'">Fechar</button>
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$dados["id"].'" data-whatevernome="'.$nome.'">Fechar</button>
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$dados["id"].'" data-whatevernome="'.$nome.'">Fechar</button>
							</div>

						</div>	
						
						';
							
						}
							
						}
						
						?>						
						
						
					</div>
					</form>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>