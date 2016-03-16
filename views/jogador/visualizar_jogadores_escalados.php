<?php 
require_once"DB/conexao.php";
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');
?>

<div>
  <h4>Jogadores Escalados</h4>
  <table class="table">            
    <tr>          
      <td>Nome</td>   
      <td>Posicao</td>    
      <td>AVG</td>          
    </tr>
    <?php     
    $crud=new CRUD;                                                         
    $sel=$crud->select('*,sigla_posicao,nome_season','jogadores','INNER JOIN posicao_jogador INNER JOIN season WHERE jogadores.posicao = posicao_jogador.id_posicao AND jogadores.season_in = season.id_season AND status =1 ',array());
    foreach($sel as $reg){ 
      ?>
      <tr>
        <td><?php print $reg['nome_jogador'] ?></td>
        <td><?php print $reg['sigla_posicao'] ?></td>
        <td><?php print $reg['avg_jogador'] ?></td>              
        <td></td>
      </tr>
      <?php } ?>
    </table>
  </div>