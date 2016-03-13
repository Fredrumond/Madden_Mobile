<?php require_once ('includes/header.php');
      require_once ('class/ConDB.class.php');
      require_once ('class/CRUD.class.php');
         
?>  
  
 <div class="container-fluid">
    <div class="row-fluid">
      
      <div class="col-md-7 caixa">        
        <div class="historico">
          <h4>Todos os Jogadores</h4>
          <!--Lista Jogadores-->
          <table class="table">            
            <tr>          
              <td>Nome</td>   
              <td>Posicao</td>    
              <td>AVG</td>
              <td>Season Entrada</td>
              <td>Season Saida</td>          
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
            </tr>
            <?php } ?>
                  
            
          </table>
        </div>
      </div>
      <div class="col-md-1"></div>
      
      <div class="col-md-4 caixa ">
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
            </tr>
            <?php } ?>
                  
            
          </table>

      </div>
    </div>
  </div>

<?php require_once ('includes/footer.php');?>