<?php require_once ('includes/header.php');?>  

<div class="container-fluid">
  <div class="row-fluid">
    
    <!--LISTA DE TODOS OS JOGADORES-->  
    <div class="col-md-7 caixa">        
     <?php require_once ('views/jogador/visualizar_todos_jogadores.php');?>
   </div>

   <!--ESPAÇO DE UMA COLUNA-->
   <div class="col-md-1"></div>
   
   <!--LISTA DE JOGADORES ESCALADOS-->  
   <div class="col-md-4 caixa ">        
    <?php require_once ('views/jogador/visualizar_jogadores_escalados.php');?>
  </div>
  
</div>
</div>

<?php require_once ('includes/footer.php');?>