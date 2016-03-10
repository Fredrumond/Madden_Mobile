<?php require_once ('includes/header.php');?>  
  
  <div class="container-fluid">
    <div class="row-fluid">      
      <div class="col-md-2"></div>      
      <div class="col-md-7 caixa">
        
      </div>     
     
    </div>
  </div>


  <div class="container-fluid">
    <div class="row-fluid">
      <!--HISTORICO-->
      <div class="col-md-2"></div>
      <div class="col-md-7 caixa">        
        <div class="historico">
          <table  class="table">
            <tr> 
              <td>#</td>             
              <td>Time</td>
              <td>Jogos</td>
              <td>PC</td>
              <td>PS</td>                        
            </tr>            
              <?php     
                $crud=new CRUD;
                $lugar = 1;                
                $sel=$crud->select('adversario,COUNT(adversario) as adversarioAlias,SUM(placar_h) as convertidos,SUM(placar_a) as sofridos,nome_time,logo','week','INNER JOIN times WHERE week.adversario = times.id_time GROUP BY adversario ORDER BY adversarioAlias DESC, convertidos DESC ',array());
                foreach($sel as $reg){
              ?>
            <tr>
                <td><?php print $lugar ?></td>
                <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
                <td><?php print $reg['adversarioAlias'] ?></td>                
                <td><?php print $reg['convertidos'] ?></td>
                <td><?php print $reg['sofridos'] ?></td>
              <?php $lugar++; }?>
            </tr>         
            </select>  
          </table>
        </div>
      </div>     
     
    </div>
  </div>



 

<?php require_once ('includes/footer.php');?>