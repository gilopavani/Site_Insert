<?php
	session_start();
	if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
			header('location:../index.php');
		}
	include'../conecta.php';
 
	$consulta = "SELECT * FROM os";

	$con = $link->query($consulta) or die ($link->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Abertura OS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
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
			  <a href="../tabela/index.php">
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
	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action = "inserir.php" method="POST">
					<span class="login100-form-title p-b-51" >
						ABRIR OS
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nome Cliente ?? necess??rio">
						<input class="input100" type="text" name="nome" placeholder="Cliente">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Numero OS ?? necess??rio">
						<input class="input100" type="text" name="numero_os" placeholder="Numero OS">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Equipamento ?? necess??rio">
						<input class="input100" type="text" name="equipa" placeholder="Equipamento">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Status ?? necess??rio">
						<input class="input100" type="text" name="status" placeholder="Status">
						<span class="focus-input100"></span>
					</div>

					<b class="data">Data de saida</b>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Data ?? necess??rio">
						<input class="input100" type="date" name="date" placeholder="date">
						<span class="focus-input100"></span>
					</div>
						
					<label for="chkPassport">
						<input class="inputcheck" id="chkPassport" type="checkbox">
					</label>
					<b class="hora" >Hora de saida</b>
					
					<span class="focus-input100"></span>
					<div class="wrap-input100 validate-input m-b-16" id="dvPassport" style="display: none">
						<div class="wrap-input100 validate-input m-b-16" id="txtPassportNumber" >
							<input class="input1000" type="time" name="time">
						</div>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Prioridade ?? necess??rio">
						<select class="input100" type="text" name="prioridade" placeholder="Prioridade">
							<option value="1" selected>Baixa</option>
							<option value="3">Alta</option>
							<option value="4">Urgente</option>
						</select>
						<span class="focus-input100"></span>
					</div>
									

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Abrir O.S.
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="checkbox.js"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
	

</body>
</html>