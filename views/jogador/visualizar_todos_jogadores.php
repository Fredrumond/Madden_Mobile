<?php 
require_once"DB/conexao.php";
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');
?>

<div class="lista-todos-jogadores">
  <h4>Todos os Jogadores</h4>
  <!--Lista Jogadores-->
  <table class="table">            
    <tr>          
      <td>Nome</td>   
      <td>Posicao</td>    
      <td>AVG</td>
      <td>Season Entrada</td>
      <td>Season Saida</td>
      <td>Ações</td>          
    </tr>
    <?php     
    $crud=new CRUD; 
                # INNER JOIN posicao_jogador INNER JOIN season WHERE jogadores.posicao = posicao_jogador.id_posicao and jogadores.season_in = season.id_season                                                        
    $sel=$crud->select('*,sigla_posicao,nome_season','jogadores','INNER JOIN posicao_jogador INNER JOIN season WHERE jogadores.posicao = posicao_jogador.id_posicao AND jogadores.season_in = season.id_season',array());
    foreach($sel as $reg){ 
      ?>
      <tr>
        <td><?php print $reg['nome_jogador'] ?></td>
        <td><?php print $reg['sigla_posicao'] ?></td>
        <td><?php print $reg['avg_jogador'] ?></td>
        <td><?php print $reg['nome_season'] ?></td>
        <td><?php print $reg['nome_season'] ?></td>
        <td>
          <a href='acoes/jogador/form-editar-jogador.php?&id=<?php echo $reg['id_jogador'];?>' class="glyphicon glyphicon-wrench" ></a>
        </td>
        
      </tr>
      <?php } ?>
      
      
    </table>
  </div>