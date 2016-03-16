<?php
require_once"../DB/conexao.php";

$season     = DBEscape($_POST['season']);
$week       = DBEscape($_POST['week']);
$tipo_jogo  = DBEscape($_POST['tipo_jogo']);
$adversario = DBEscape($_POST['adversario']);
$placar_h   = DBEscape($_POST['placar_h']);
$placar_a   = DBEscape($_POST['placar_a']);


$query = "INSERT INTO week(id_season,week,id_jogo,adversario,placar_h,placar_a) VALUES ('$season','$week','$tipo_jogo','$adversario','$placar_h','$placar_a');";
DBExecute($query);
/*
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Week.class.php');

$season     = $_POST['season'];
$week       = $_POST['week'];
$tipo_jogo  = $_POST['tipo_jogo'];
$adversario = $_POST['adversario'];
$placar_h   = $_POST['placar_h'];
$placar_a   = $_POST['placar_a'];

echo $season;
echo $week;
echo $tipo_jogo;
echo $adversario;
echo $placar_h;
echo $placar_a;

$week=new Week;
$week->insereWeek($season,$week,$tipo_jogo,$adversario,$placar_h,$placar_a);*/


header("Location: ../index2.php");


?>