<?php require_once ('includes/header.php');?>  

<div class="container-fluid">
  <div class="row-fluid">
    
    <!--HISTORICO GERAL-->
    <div class="col-md-7 caixa">        
      <?php require_once ('views/visualizar_historico.php');?>        
    </div>

    <!--ESPAÇO DE UMA COLUNA-->
    <div class="col-md-1"></div>

    <!--Inserir Jogo-->    
    <div class="col-md-4 caixa ">
    <h4>Inserir Jogo</h4>         
      <?php require_once ('acoes/jogo/form_inserir_jogo.php');?>    
    </div>
    
  </div>
</div> 

<?php require_once ('includes/footer.php');?>