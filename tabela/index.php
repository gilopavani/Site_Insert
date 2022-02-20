<?php

	session_start();
	if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
		header('location:../index.php');
	}

	include'../conecta.php';
 
	$consulta = "SELECT * FROM os";

	$con = $link->query($consulta) or die ($link->error);




while($dados = $con->fetch_array()){
							$nome = $dados["Nome"] ;
							$numero = $dados["numero_os"] ;
							$status= $dados["status"] ;
							$previa= $dados["data_prev"] ; 
							$color = $dados["color"] ;
							$id = $dados["id"];
							$dt_atual = date("Y-m-d");
							
							$tempo ;
							
					
						if($dados["Fechado"] == 1 ){
							if($dt_atual > $previa){
								$fecha = $id ;
								$color = intval($color);
								if($color < 4){
									$color = $color + 1 ;
									$sql = "UPDATE `os` SET `color` = $color WHERE `os`.`id` = $fecha";
									$tempo = 1 ;
									$result = mysqli_query($link, $sql);
								}
							}							
							
						}
							
				}






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

<!--=======================================busca========================================================-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.css'>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>



<nav class="nav">
    <button class="toggle-menu">
      <span></span>
	</button>
<!--=======================================busca========================================================-->

			<div class="wrap">
		<div class="search">
			<input type="text" class="searchTerm" id="pesquisa" placeholder="Digite o número da OS">
			<button type="submit" class="searchButton">
			</button>
		</div>
	</div>

	<!--=======================================busca========================================================-->
</nav>

</head>
<body>
<audio id "audio" src="alert.mp3"></audio>
<script>


function start(temp){
	var tempo = temp ;
	if(tempo == 1){
function alarme(numero){	
var num = numero ;
const Toast = Swal.mixin({
  toast: true,
  position: "top-center",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer)
    toast.addEventListener("mouseleave", Swal.resumeTimer)
  }
})

Toast.fire({
  icon: "warning",
  title: " Atenção O.S Esta Atrasada !!! "
})

const audio = document.querySelector('audio');
	audio.play();

window.setTimeout("location.reload()", 4200);	

}

setInterval(alarme,5000);
	}
}
start(1);


</script>

		<!--=========================Menu======================================================================-->
		
</div>
		<div id="menu" class="">
		<nav class="main-nav">
		  <ul>
			<li>
			  <a href="index.php">
				O.S. Aberta
			  </a>
			</li>
			<li>
			  <a href="../Inserir_OS/abriros.php">
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
	<div id="dvPassport">	
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
						
						<form action = "fecha.php" method="POST">
						
						<div class="table" id="resultado">
							
						
						</div>
						</form>
				</div>
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

	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script type="text/javascript" src="personalizado.js"></script>


</body>
</html>