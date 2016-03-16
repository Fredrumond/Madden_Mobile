<?php
require_once ('../../class/ConDB.class.php');
require_once ('../../class/CRUD.class.php');

$id = $_GET["id"];

$crd=new CRUD;
$sel=$crd->select('*','jogadores','WHERE id_jogador = '.$id.'',array());

foreach($sel as $reg){
	#print $reg['status'];

}
?>

<form  method="post" action="editar-jogador.php">
	<h1>Editar Jogador</h1>
	<input name="id" type="hidden" value="<?php print $reg['id_jogador']; ?>"/>
	<input name="nome_jogador" type="text"  value="<?php print $reg['nome_jogador']; ?>" />
	<input name="posicao" type="text"  value="<?php print $reg['posicao']; ?>" /> 
	<input name="avg_jogador" type="text"  value="<?php print $reg['avg_jogador']; ?>" /> 
	<input name="status" type="text"  value="<?php print $reg['status']; ?>" /> 
	<input name="season_in" type="text"  value="<?php print $reg['season_in']; ?>" /> 
	<input name="season_out" type="text"  value="<?php print $reg['season_out']; ?>" />       
	<input  type="submit"  value="Atualizar" />
</form>


