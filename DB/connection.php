<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=madden","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>