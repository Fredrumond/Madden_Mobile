<?php require_once ('includes/header.php');?>  

<div class="container-fluid">
  <div class="row-fluid">
    
    <!--VISUALIZAR SEASON-->      
    <div class="col-md-7 caixa">        
      <?php require_once ('views/season/visualizar_season.php');?>
    </div>

    <!--ESPAÇO DE UMA COLUNA-->
    <div class="col-md-1"></div>

    <!--VISUALIZAR DETALHES DA SEASON-->    
    <div class="col-md-4 caixa ">
      <?php require_once ('views/season/visualizar_season_detalhes.php');?>
    </div>

  </div>
</div>

<?php require_once ('includes/footer.php');?>