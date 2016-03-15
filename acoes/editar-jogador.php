<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');

$id_jogador = $_POST["id"];

$nome_jogador = $_POST['nome_jogador'];
$posicao      = $_POST['posicao'];
$avg_jogador  = $_POST['avg_jogador'];
$status  = $_POST['status'];

$jogador=new Jogador;
$jogador->editaJogador($nome_jogador,$posicao,$avg_jogador,$status,$id_jogador);

header("Location: ../jogadores.php");

 ?>
