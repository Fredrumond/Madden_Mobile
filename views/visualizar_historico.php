<?php require_once"DB/conexao.php";
      require_once ('class/ConDB.class.php');
      require_once ('class/CRUD.class.php');

?>

<table  class="table">
            <tr> 
              <td>#</td>             
              <td>Time</td>
              <td>Jogos</td>
              <td>Vitorias</td>
              <td>Derrotas</td>
              <td>Casa</td>
              <td>Fora</td>
              <td>PC</td>
              <td>PS</td>
              <td>Aproveitamento</td>                                     
            </tr>            
              <?php     
                $crud=new CRUD;
                $lugar = 1;
                $convertidos = 0;
                $sofridos = 0;
                $totalConvertidos = 0;
                $totalSofridos = 0;                          
                $sel=$crud->select('adversario,COUNT(adversario) as jogos,
                                               SUM(placar_h) as convertidos,
                                               SUM(placar_a) as sofridos,
                                               SUM(vitoria = 1) as vitorias,
                                               SUM(derrota = 1) as derrotas,
                                               SUM(casa = 1) as jogos_casa,
                                               SUM(fora = 1) as jogos_fora,
                                               nome_time,logo',
                                               'week','INNER JOIN times 
                                               WHERE week.adversario = times.id_time 
                                               GROUP BY adversario 
                                               ORDER BY jogos DESC, convertidos DESC ',array());
                foreach($sel as $reg){
              ?>
            <tr>
                <td><?php print $lugar ?></td>
                <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
                <td><?php print $reg['jogos'] ?></td>
                <td><?php print $reg['vitorias'] ?></td> 
                <td><?php print $reg['derrotas'] ?></td>
                <td><?php print $reg['jogos_casa'] ?></td>  
                <td><?php print $reg['jogos_fora'] ?></td>                   
                <td><?php print $convertidos = $reg['convertidos'] ?></td>
                <td><?php print $sofridos = $reg['sofridos'] ?></td>                
              <?php 
                $lugar++;

                $somaPontosConvertidos = $convertidos;
                $somaPontosSofridos = $sofridos;
                $totalConvertidos = $totalConvertidos + $somaPontosConvertidos;
                $totalSofridos = $totalSofridos + $somaPontosSofridos;

                $aproveitamento = ($reg['vitorias'] / $reg['jogos']) * 100;


               
              ?>
                <td><?php print number_format($aproveitamento,1,",",".") . '%' ?></td>
              <?php
              }?>
              
            </tr>
</table>

<table  class="table">                          
  <tr>              
    <td>Jogos</td>
    <td>Vitorias</td>
    <td>Derrotas</td>
    <td>PC</td>
    <td>PS</td>              
    <td>Aproveitamento</td>                  
  </tr>
  <tr>

  </tr>                 
</table>

