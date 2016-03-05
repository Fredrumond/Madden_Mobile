<?php
	require_once ('ConDB.class.php');
	require_once ('CRUD.class.php');
	require_once ('Season.class.php');
	require_once ('Week.class.php');

	#$season=new Season;
	#$season->insereSeason('teste2','11/11/11','12/12/12');
	#$season->editaSeason('7','Season 4','13/13/13','14/14/14');
	#$season->deletaSeason('1');

	$week=new Week;
	#$week->insereWeek('3','5','1','24','50','32','0','0');
	$week->editaWeek('3','5','1','24','50','32','0','0','12');

	
	



?>