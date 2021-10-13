<?php 

require_once 'Exemplo8.2.php';

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$result = $db->exec("INSERT INTO dishes(dish_size, dish_name, price, is_spicy)
									  VALUES('large', 'Sesame Seed Puff', 2.50, 0)");


if(false === $result){

	$error = $db->errorInfo();
	print "Couldn't insert a row!</br>";
	print "SQL Error={$error[0]}, DB ERROR={$error[1]}, Message={$error[2]}</br>";
}

?>