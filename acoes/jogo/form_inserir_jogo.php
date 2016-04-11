<form method="POST" action="inserir_jogo.php">
        <!--Season-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Season</label>
            <select class="form-control input-small" name="season" >
              <option>Season</option>
              <?php     
              $crud=new CRUD;
              $sel=$crud->select('*','season','',array());
              foreach($sel as $reg){
                ?>
                <option value="<?php print $reg['id_season'] ?>"><?php print $reg['nome_season'] ?></option>
                <?php }?>         
            </select>            
          </div>
        </div>
        <!--Week-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Week</label>
            <input class="form-control input-small" type="number" id="week" name="week">
            <br>
          </div>
        </div>
        <!--Tipo de Jogo-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Tipo de Jogo</label>
            <select class="form-control input-small" name="tipo_jogo" >
              <option>Tipo de jogo</option>
              <?php
              $crud=new CRUD;
              $sel=$crud->select('*','jogo','',array());
              foreach($sel as $reg){
                ?>
                <option value="<?php print $reg['id_jogo'] ?>"><?php print $reg['nome_jogo'] ?></option>
                <?php }?>               
            </select>
          </div>
        </div>
        <!--Adversario-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Adversario</label>
            <select class="form-control input-small" name="adversario" >
              <option>Adversario</option>
              <?php     
              $crud=new CRUD;
              $sel=$crud->select('*','times','ORDER BY nome_time ASC',array());
              foreach($sel as $reg){
                ?>
                <option value="<?php print $reg['id_time'] ?>"><?php print $reg['nome_time'] ?></option>
                <?php }?>         
            </select>
            <br>
          </div>
        </div>
        <!--Placar Casa-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Placar Casa</label>
            <input class="form-control input-small" type="number" id="placar_h" name="placar_h">
          </div>
        </div>
        <!--Placar Fora-->  
        <div class="form-group">
          <div class="col-xs-6">
            <label for="exampleInputPassword1">Placar Fora</label>
            <input class="form-control input-small" type="number" id="placar_a" name="placar_a">
            <br>
          </div>          
        </div> 

        <div class="col-xs-6">
          <button type="submit" class="btn btn-success btn-lg">Inserir</button>
        </div>
      </form>