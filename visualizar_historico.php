<?php require_once"DB/conexao.php";
      require_once ('class/ConDB.class.php');
      require_once ('class/CRUD.class.php');

?>

<table  class="table">
            <tr> 
              <td>#</td>             
              <td>Time</td>
              <td>Jogos</td>
              <td>PC</td>
              <td>PS</td> 
              <td>Vitoria</td>    
              <td>Derrota</td>                           
            </tr>            
              <?php     
                $crud=new CRUD;
                $lugar = 1;
                $convertidos = 0;
                $sofridos = 0;
                $totalConvertidos = 0;
                $totalSofridos = 0;
                $vitoria = 0;
                $derrota = 0;                
                $sel=$crud->select('adversario,COUNT(adversario) as adversarioAlias,SUM(placar_h) as convertidos,SUM(placar_a) as sofridos,nome_time,logo','week','INNER JOIN times WHERE week.adversario = times.id_time GROUP BY adversario ORDER BY adversarioAlias DESC, convertidos DESC ',array());
                foreach($sel as $reg){
              ?>
            <tr>
                <td><?php print $lugar ?></td>
                <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
                <td><?php print $reg['adversarioAlias'] ?></td>                
                <td><?php print $convertidos = $reg['convertidos'] ?></td>
                <td><?php print $sofridos = $reg['sofridos'] ?></td>
              <?php 
                $lugar++;
                $somaPontosConvertidos = $convertidos;
                $somaPontosSofridos = $sofridos;
                $totalConvertidos = $totalConvertidos + $somaPontosConvertidos;
                $totalSofridos = $totalSofridos + $somaPontosSofridos;

                if($convertidos > $sofridos)
                    $vitoria++;
                  else
                    $derrota++;
              ?>
                <td><?php print $vitoria ?></td>
                <td><?php print $derrota ?></td>
              <?php
              }?>
              
            </tr>
          </table>