  <?php require_once"../../DB/conexao.php";
      require_once ('../../class/ConDB.class.php');
      require_once ('../../class/CRUD.class.php');
      
  /*    <select name="season" >
    <option>Season</option>
    <?php     
    $crud=new CRUD;
    $sel=$crud->select('*','season','',array());
    foreach($sel as $reg){
      ?>
      <option value="<?php print $reg['id_season'] ?>"><?php print $reg['nome_season'] ?></option>
      <?php }?>         
    </select>*/

?>


  <!DOCTYPE HTML>
  <html lang="pt-BR">
  <head>
    <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1" />    
      <title>MADDEN MOBILE</title>
    
    <!-- Bootstrap -->
    <link href="../../libs/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- My Css -->
    <link rel="stylesheet" type="text/css" href="../../libs/mycss/style.css">
  </head> 
  <body>
     <img src="../../libs/img/madden-logo.png">

    <nav>
      <div class="header">    
        <div class="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="season.php">Season</a></li>  
            <li><a href="jogadores.php">Jogadores</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php     
                  $crud=new CRUD;
                  $sel=$crud->select('*','season','',array());
                  foreach($sel as $reg){
                    ?>
                    <li><a href='../../views/season/visualizar_season.php?&id=<?php echo $reg['id_season'];?>'><?php print $reg['nome_season'] ?></a></li>                    
                <?php }?>   
              </ul>
            </li>         
          </ul>
        </div>
      </div>
   </nav>  

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>   
  <script src="../../libs/js/bootstrap.min.js"></script>
</body>
</html>