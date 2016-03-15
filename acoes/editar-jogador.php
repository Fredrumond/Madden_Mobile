<?php

require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Jogador.class.php'); 

$id = $_POST['id'];

$jogador=new Jogador;
$jogador->editaJogador($nome_jogador,$posicao,$avg_jogador,$id);


#header("Location: ../index.php");

 ?>
