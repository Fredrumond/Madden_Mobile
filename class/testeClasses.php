<?php
	require_once ('ConDB.class.php');
	require_once ('CRUD.class.php');
	require_once ('Season.class.php');
	require_once ('Week.class.php');
	require_once ('Time.class.php');
	require_once ('Jogador.class.php');

	#$season=new Season;
	#$season->insereSeason('teste2','11/11/11','12/12/12');
	#$season->editaSeason('7','Season 4','13/13/13','14/14/14');
	#$season->deletaSeason('1');

	#$week=new Week;
	#$week->insereWeek('3','5','1','24','50','32','0','0');
	#$week->editaWeek('3','5','1','24','50','32','0','0','12');

	#$time=new Time;
	#$time->insereTime('time teste','1','1');
	#$time->editaTime('testado','2','2','33');

	$jogador=new Jogador;
	#$jogador->insereJogador('Tesmening','3','99');
	#$jogador->editaJogador('Andre Tonson','1','98','2');
	$jogador->deletaJogador(5);



?>