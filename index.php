<?php require_once ('includes/header.php');?>  
  
  <div class="container-fluid">
    <div class="row-fluid">
      <!--HISTORICO-->
      <div class="col-md-7 caixa">        
        <div class="historico">
          <table  class="table">
            <tr>              
              <td>Time</td>
              <td>Jogos</td>   
              
              <td>PC</td>
              <td>PS</td>                        
            </tr>            
              <?php     
                $crud=new CRUD;
                #SELECT adversario,COUNT(adversario) as adversarioAlias,SUM(placar_h) as convertidos,SUM(placar_a) as sofridos,nome_time  
                #FROM  week 
                #INNER JOIN times 
                #WHERE week.adversario = times.id_time  
                #GROUP BY adversario;
                $sel=$crud->select('adversario,COUNT(adversario) as adversarioAlias,SUM(placar_h) as convertidos,SUM(placar_a) as sofridos,nome_time,logo','week','INNER JOIN times WHERE week.adversario = times.id_time GROUP BY adversario',array());
                foreach($sel as $reg){
              ?>
            <tr>
                <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
                <td><?php print $reg['adversarioAlias'] ?></td>
                
                <td><?php print $reg['convertidos'] ?></td>
                <td><?php print $reg['sofridos'] ?></td>
              <?php }?>
            </tr>         
            </select>  

          </table>
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
            <tr>              
              <td>1</td>
              <td><img src="libs/img/Patriots2.png"> Patriots</td>
              <td>34</td>
              <td>x</td>
              <td>10</td>
              <td>X</td>
              <td></td>                 
            </tr>
            <tr>              
              <td>2</td>
              <td><img src="libs/img/Broncos2.png"> Broncos</td>
              <td>54</td>
              <td>x</td>
              <td>30</td>
              <td></td>
              <td>X</td>                 
            </tr>
            <tr>              
              <td>2</td>
              <td><img src="libs/img/Texans2.png"> Texans</td>
              <td>54</td>
              <td>x</td>
              <td>30</td>
              <td></td>
              <td>X</td>                 
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