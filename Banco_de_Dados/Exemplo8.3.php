<?php 

require_once 'Exemplo8.2.php';

try{


	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$q = $db->exec("CREATE TABLE dishes(

					dish_id INT PRIMARY KEY AUTO_INCREMENT,
					dish_name VARCHAR(255),
					price DECIMAL(4,2),
					is_spicy INT


				   )");
}catch(PDOException $e){

	print "Could not create table: " . $e->getMessage();
}









?>