<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Season.class.php');

$nome_season = $_POST['nome_season'];
$data_inicio = $_POST['data_inicio'];
$data_final  =  $_POST['data_final'];

$season=new Season;
$season->insereSeason($nome_season,$data_inicio,$data_final);

header("Location: ../index.php");

?>