<?php 

require_once 'Exemplo8.2.php';

try{

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$affected_rows = $db->exec("INSERT INTO dishes(dish_name, price, is_spicy) VALUES('Sesame Seed Puff', 2.50, 0)");


}catch(PDOException $e){

	print "Couldn't insert a row: " . $e->getMessage();
}
?>