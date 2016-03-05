<?php
	require_once ('ConDB.class.php');
	require_once ('CRUD.class.php');
	require_once ('Season.class.php');

	$season=new Season;

	#$season->insereSeason('teste2','11/11/11','12/12/12');
	$season->editaSeason('7','Season 4','13/13/13','14/14/14');

?>