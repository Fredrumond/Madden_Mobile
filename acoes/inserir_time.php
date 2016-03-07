<?php 

require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Time.class.php');

$nome        = $_POST['nome_time'];
$conferencia = $_POST['conferencia'];
$divisao     = $_POST['divisao'];

$time=new Time;
$time->insereTime($nome,$conferencia,$divisao);

header("Location: ../index.php");


?>