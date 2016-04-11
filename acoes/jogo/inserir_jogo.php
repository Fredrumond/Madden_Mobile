<?php

require_once ('../../class/ConDB.class.php');
require_once ('../../class/CRUD.class.php');
require_once ('../../class/Week.class.php');

$season       = $_POST['season'];
$semana       = $_POST['week'];
$tipo_jogo    = $_POST['tipo_jogo'];
$adversario   = $_POST['adversario'];
$placar_h     = $_POST['placar_h'];
$placar_a     = $_POST['placar_a'];


$week=new Week;
$week->insereWeek($season,$semana,$tipo_jogo,$adversario,$placar_h,$placar_a);


header("Location: ../../index.php");


?>