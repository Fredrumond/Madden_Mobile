<?php 
require_once ('../../class/ConDB.class.php');
require_once ('../../class/CRUD.class.php');
require_once ('../../class/Jogador.class.php');

$nome_jogador = $_POST['nome_jogador'];
$posicao      = $_POST['posicao'];
$avg_jogador  = $_POST['avg_jogador'];

$jogador=new Jogador;
$jogador->insereJogador($nome_jogador,$posicao,$avg_jogador);


header("Location: ../../index2.php");


?>