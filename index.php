<?php require_once ('includes/header.php');?>  
  
  <div class="container-fluid">
    <div class="row-fluid">
      <!--HISTORICO-->
      <div class="col-md-7 caixa">        
        <div class="historico">
          <?php require_once ('views/visualizar_historico.php');?>
        </div>
      </div>
      <div class="col-md-1"></div>
      <!--SEASON-->
      <div class="col-md-4 caixa ">
         <table  class="table">                          
            <tr>              
              <td>Week</td>
              <td>Adversario</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Fora</td>
              <td>Casa</td>                 
            </tr>
                 
          </table>
        
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">      
      <div class="col-md-8"></div>
      <!--time-->
      <div class="col-md-4 caixa ">         
        <div class="time">
          <table  class="table">
            <tr>              
              <td>Posição</td>
              <td>Jogador</td>   
              <td>AVG</td>                                    
            </tr>
            <tr>             
              <td>WR</td>
              <td>Andre Johnson</td>
              <td>83</td>                 
            </tr>
            <tr>             
              <td>WR</td>
              <td>Andre Johnson</td>
              <td>83</td>                 
            </tr>
            <tr>             
              <td>WR</td>
              <td>Andre Johnson</td>
              <td>83</td>                 
            </tr>
                               
          </table>
        </div>
      </div>
    </div>
  </div>

<?php require_once ('includes/footer.php');?>