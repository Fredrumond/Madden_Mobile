<?php
function __autoload($class){require_once"{$class}.class.php";}

abstract class ConDB
{
	private static $cnx;
	private function setConn(){
		return
		is_null(self::$cnx)?
		self::$cnx=new PDO("mysql:host=localhost;dbname=madden","root",""):
		self::$cnx;
	}
	public function getConn(){
		return $this->setConn();
	}
}
#teste de conexao
#$conn=new ConDB;
#$conn->getConn();

#teste CRUD
$crud=new CRUD;
$crud->insert('teste','nome=?',array('frederico'));
#$crud->insert('user','user=?,email=?',array('teste','teste2@teste'));
#$crud->insert('tarefa','tarefas=?',array())
#$sel=$crud->select('*','user','',array());
#foreach($sel as $reg){
#	var_dump($reg);
#}

#$upd=$crud->update('user','user=?,email=? WHERE id=?',array('jose','agulhas@j',1));
#$crud->delete('user','WHERE id=?',array(1));

