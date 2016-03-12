<?php require_once ('includes/header.php');
      require_once ('class/ConDB.class.php');
      require_once ('class/CRUD.class.php');
         
?>  
  
 <div class="container-fluid">
    <div class="row-fluid">
      
      <div class="col-md-7 caixa">        
        <div class="historico">
          <!--Lista Jogadores-->
          <table class="table">            
            <tr>          
              <td>Nome</td>   
              <td>Posicao</td>    
              <td>AVG</td>          
            </tr>
            <?php     
                $crud=new CRUD;                                                         
                $sel=$crud->select('*,sigla_posicao','jogadores INNER JOIN posicao_jogador WHERE jogadores.posicao = posicao_jogador.id_posicao ','',array());
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
      <div class="col-md-1"></div>
      
      <div class="col-md-4 caixa ">
        

      </div>
    </div>
  </div>

<?php require_once ('includes/footer.php');?>