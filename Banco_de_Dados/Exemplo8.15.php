<?php

require_once 'Exemplo8.2.php';

try{

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Eggplant with Chili Sauce é um prato apimentado
	//Se não quisermos saber quantas linhas serão afetadas, não precisamos manter o valor de exec()
	$db->exec("UPDATE dishes SET is_spicy = 1
				WHERE dish_name = 'Eggplant with Chili Sauce'");
	//Lobster with Chili Sauce é apimentado e caro
	$db->exec("UPDATE dishes SET is_spicy = 1, price= price*2
				WHERE dish_name= 'Lobster with Chili Sauce '");


}catch(PDOException $e){

	print "Couldn't inser a row: " .$e->getMessage();
}



?> 