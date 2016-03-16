<?php 
require_once"DB/conexao.php";
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');

?>

<div class="historico-season">
  <?php               
  $crud=new CRUD;
  $sel=$crud->select('*','season','WHERE id_season = 3',array());
  foreach($sel as $reg){
    ?>
    <h4><?php print $reg['nome_season'] . '- Inicio: ' . $reg['data_inicio'] . ' Final: ' . $reg['data_final']  ?>
      <?php }?>
      <div class='regular'>
        <img src="libs/img/regular_season2.png">
      </div>
      
      <table class="table">
        <tr bgcolor="#0f3063">
          <td>Week</td>
          <td>Time</td>
          <td>Pontos</td>
          <td></td>
          <td>Pontos</td>
          <td>Time</td>
          <td>Casa</td>
          <td>Fora</td>
        </tr>            
        <?php
        $soma_pontos_convertidos = 0;
        $soma_pontos_sofridos = 0;
        $total_pontos_convertidos = 0;
        $total_pontos_sofridos = 0;      
        $crud=new CRUD;
        $sel=$crud->select('*,nome_time','week','INNER JOIN times where id_jogo = 1 and id_season = 3 and week.adversario = times.id_time',array());
        foreach($sel as $reg){
          ?>
          <tr>
            <td><?php print $reg['week'] ?></td>
            <td><img src="libs/img/49ers.png"> 49ers</td>
            <td><?php print $pontos_convertidos = $reg['placar_h'] ?></td>
            <td>x</td>
            <td><?php print $pontos_sofridos = $reg['placar_a'] ?></td>
            <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
            <?php 
            $soma_pontos_convertidos = $pontos_convertidos;
            $soma_pontos_sofridos = $pontos_sofridos;
            $total_pontos_convertidos = $total_pontos_convertidos + $soma_pontos_convertidos;
            $total_pontos_sofridos = $total_pontos_sofridos + $soma_pontos_sofridos;
          }?>
        </tr> 
      </table>
      <div class='playoffs'>
        <img src="libs/img/playoffs2.png">
      </div>
      <table class="table">
        <tr bgcolor="#d52027">
          <td>Week</td>
          <td>Time</td>
          <td>Pontos</td>
          <td></td>
          <td>Pontos</td>
          <td>Time</td>
          <td>Casa</td>
          <td>Fora</td>
        </tr>
        <?php
        $soma_pontos_convertidos_po = 0;
        $soma_pontos_sofridos_po = 0;
        $total_pontos_convertidos_po = 0;
        $total_pontos_sofridos_po = 0;     
        $crud=new CRUD;
        $sel=$crud->select('*,nome_time','week','INNER JOIN times where id_jogo = 2 and id_season = 3 and week.adversario = times.id_time',array());
        foreach($sel as $reg){
          ?>
          <tr>
            <td><?php print $reg['week'] ?></td>
            <td><img src="libs/img/49ers.png"> 49ers</td>
            <td><?php print $pontos_convertidos_po = $reg['placar_h'] ?></td>
            <td>x</td>
            <td><?php print $pontos_sofridos_po = $reg['placar_a'] ?></td>
            <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
            <?php
            $soma_pontos_convertidos_po = $pontos_convertidos_po;
            $soma_pontos_sofridos_po = $pontos_sofridos_po;
            $total_pontos_convertidos_po = $total_pontos_convertidos_po + $soma_pontos_convertidos_po;
            $total_pontos_sofridos_po = $total_pontos_sofridos_po + $soma_pontos_sofridos_po;
          }?>
        </tr>
      </table>
      <div class='sb'>
        <img src="libs/img/sb2.png">
      </div>
      <table class="table">
        <tr bgcolor="#757373">
         
          <td>Time</td>
          <td>Pontos</td>
          <td></td>
          <td>Pontos</td>
          <td>Time</td             
          </tr>
          <?php     
          $crud=new CRUD;
          $sel=$crud->select('*,nome_time','week','INNER JOIN times where id_jogo = 3 and id_season = 3 and week.adversario = times.id_time',array());
          foreach($sel as $reg){                
            ?>
            <tr>
              <td><img src="libs/img/49ers.png"> 49ers</td>
              <td><?php print $reg['placar_h'] ?></td>
              <td>x</td>
              <td><?php print $reg['placar_a'] ?></td>
              <td><img src="<?php print $reg['logo'] ?>"> <?php print $reg['nome_time'] ?></td>
              <?php }?>
            </tr> 
          </table>
        </div>