<?php 

require_once"../DB/conexao.php";

$season = DBEscape($_POST['season']);
$week = DBEscape($_POST['week']);
$tipo_jogo = DBEscape($_POST['tipo_jogo']);
$adversario = DBEscape($_POST['adversario']);
$placar_h = DBEscape($_POST['placar_h']);
$placar_a = DBEscape($_POST['placar_a']);


$query = "INSERT INTO week(id_season,week,id_jogo,adversario,placar_h,placar_a) VALUES ('$season','$week','$tipo_jogo','$adversario','$placar_h','$placar_a');";
DBExecute($query);


header("Location: ../season_teste.php");


?>