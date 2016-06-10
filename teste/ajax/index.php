<!DOCTYPE html>
<html>
<head>	
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript">

	$(document).on("ready",function(){
		loadData();
	});

	var loadData = function(){
		$.ajax({
			type:"GET",
			url:"times.php",
			dataType: 'json'
		}).done(function(data){
			console.log(data);
			var aproveitamento = 0;
			data.time.forEach(function(time){				
				$('#clas_geral').append('<tr><td>'  + time.nome_time   + 
										'</td><td>' + time.jogos       +
										'</td><td>' + time.vitorias    + 
										'</td><td>' + time.derrotas    + 
										'</td><td>' + time.jogos_casa  + 
										'</td><td>' + time.jogos_fora  +
										'</td><td>' + time.convertidos + 
										'</td><td>' + time.sofridos    +
										'</td><td>' + aproveitamentoTime(time.vitorias,time.jogos) + '%' + 
										'</td></tr>'
										);
			})
			

		});
	}

	function aproveitamentoTime (vitorias,jogos) {
		var aproveitamento = (vitorias / jogos) * 100;
		return  Math.floor(aproveitamento);
	}

	</script>
</head>
<body>
	<table id="clas_geral" border="1px">
	  <td>Time</td>
      <td>Jogos</td>
      <td>Vitorias</td>
      <td>Derrotas</td>
      <td>Casa</td>
      <td>Fora</td>
      <td>PC</td>
      <td>PS</td>
      <td>Aproveitamento</td> 
	</table>
</body>
</html>