<?php 
require_once"DB/conexao.php";
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');

?>

<div class="historico-season-detalhes">

  <h4>Temporada Regular</h4>                
  <table class='table'>                 
    <tr>            
      <td>Pontos Convertidos</td>
      <td>Media</td>            
    </tr>
    <tr bgcolor="#4caf50">
      <td><?php echo $total_pontos_convertidos;?></td>
      <td><?php $media = $total_pontos_convertidos / 16; echo number_format($media,1,",",".");?></td>            
    </tr>
    <tr>            
      <td>Pontos Sofridos</td>
      <td>Media</td>            
    </tr>
    <tr bgcolor="#ea4335">
      <td><?php echo $total_pontos_sofridos;?></td>
      <td><?php $media = $total_pontos_sofridos / 16; echo number_format($media,1,",",".");?></td>            
    </tr>
  </table>

  <h4>Playoffs</h4>                
  <table class='table'>                 
    <tr>            
      <td>Pontos Convertidos</td>
      <td>Media</td>            
    </tr>
    <tr bgcolor="#4caf50">
      <td><?php echo $total_pontos_convertidos_po;?></td>
      <td><?php $media_po = $total_pontos_convertidos_po / 2; echo number_format($media_po,1,",",".");?></td>            
    </tr>
    <tr>            
      <td>Pontos Sofridos</td>
      <td>Media</td>            
    </tr>
    <tr bgcolor="#ea4335">
      <td><?php echo $total_pontos_sofridos_po;?></td>
      <td><?php $media_po = $total_pontos_sofridos_po / 2; echo number_format($media_po,1,",",".");?></td>            
    </tr>
  </table>


</div>