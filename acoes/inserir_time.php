<?php 

require_once"../DB/conexao.php";

$nome = DBEscape($_POST['nome_time']);
$conferencia = DBEscape($_POST['conferencia']);
$divisao = DBEscape($_POST['divisao']);


$query = "INSERT INTO times(nome_time,conferencia,divisao) VALUES ('$nome','$conferencia','$divisao');";
DBExecute($query);


header("Location: ../index.php");


?>