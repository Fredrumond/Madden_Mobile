<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Season extends CRUD {

	private $id_season;
	private $nome_season;
	private $data_inicio;
	private $data_final;
    private $crd;

    public function __construct(){
        $this->crd = new CRUD();
    }

    public function insereSeason($nome_season,$data_inicio,$data_final){    	
    	$this->crd->insert('season','nome_season=?,data_inicio=?,data_final=?',array($nome_season,$data_inicio,$data_final));
    }

    public function editaSeason($id_season,$nome_season,$data_inicio,$data_final){    	
    	$this->crd->update('season','nome_season=?,data_inicio=?,data_final=? WHERE id_season=?',array($nome_season,$data_inicio,$data_final,$id_season));
    }
    
    public function deletaSeason($id_season){    	
    	$this->crd->delete('season','WHERE id_season=?',array($id_season));
    }
}

?>