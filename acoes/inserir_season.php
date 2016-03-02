<?php 

require_once"../DB/conexao.php";

$nome_season = DBEscape($_POST['nome_season']);
$data_inicio = DBEscape($_POST['data_inicio']);
$data_final = DBEscape($_POST['data_final']);


$query = "INSERT INTO season(nome_season,data_inicio,data_final) VALUES ('$nome_season','$data_inicio','$data_final');";
DBExecute($query);


header("Location: ../season_teste.php");


?>