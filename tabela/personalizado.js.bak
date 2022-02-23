$(function(){
	var temp = 0;
		setInterval(myTimer, 60000);
		
		if($("#pesquisa").val()== ''){
			$.post('table.php', function(teste){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(teste);
			});
		}
		
	function myTimer() {
		
		if($("#pesquisa").val()== ''){
			$.post('table.php', function(teste){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(teste);
			});
		}
		
	}


	$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('proc_pesq_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
		}else{
			$.post('table.php', function(teste){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(teste);
			});
		}
	});
});