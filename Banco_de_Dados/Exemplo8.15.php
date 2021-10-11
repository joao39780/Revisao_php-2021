<?php 

include 'Exemplo8.2.php';

try{

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//EggPlant with Chili Sauce é um prato apimentado
	//Se não quisermos saber quantas linha serão afetadas, não precisamos manter o valor de retorno exec()
	$db->exec("UPDATE dishes SET is_spicy = 1 WHERE dish_name = 'Eggplant with Chili Sauce'");
	//Loboster with Chili Sauce é um prato apimentado e caro
	$db->exec("UPDATE dishes SET is_spicy = 1, price = price * 2 WHERE dish_name = 'Lobster with Chili Sauce '");

}catch(PDOException $e){

	print "Couldn't insert a row". $e->getMessage();
}


?>