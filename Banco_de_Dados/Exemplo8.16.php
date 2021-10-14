<?php

require_once 'Exemplo8.2.php';

try{

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$make_things_cheaper = true;
	//Remove pratos caros
	if($make_things_cheaper){
		$db->exec("DELETE FROM dishes WHERE price > 19.95");
	}else{
		//ou remove todos os pratos
		$db->exec("DELETE FROM dishes");
	}

}catch(PDOException $e){

	print "Couldn't delete rows: " . $e->getMessage();
}

?> 