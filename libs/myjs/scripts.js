$(document).on("ready",function(){
		loadData();
});

//CARREGA O HISTORICO COM TODOS OS TIMES
var loadData = function(){
		$.ajax({
			type:"GET",
			url:"acoes/time/seleciona_times.php",
			dataType: 'json'
		}).done(function(data){
			console.log(data);
			var aproveitamento = 0;
			data.time.forEach(function(time){				
				$('#clas_geral').append('<tr><td>'  +'<img src="' + time.logo + '">'+ time.nome_time   + 
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