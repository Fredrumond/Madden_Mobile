<?php 

require_once"../DB/conexao.php";

$nome_jogador = DBEscape($_POST['nome_jogador']);
$posicao = DBEscape($_POST['posicao']);
$avg_jogador = DBEscape($_POST['avg_jogador']);

$query = "INSERT INTO jogadores(nome_jogador,posicao,avg_jogador) VALUES ('$nome_jogador','$posicao','$avg_jogador');";
DBExecute($query);


header("Location: ../index.php");


?>