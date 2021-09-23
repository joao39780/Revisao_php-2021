<?php 
/*Exemplo6.9 - Manipulando uma exceção*/

/*Para você mesmo manipular uma exceção é preciso duas etapas:
1. Inserir o código que pode lançar uma exceção dentro de um bloco try
2. Inserir um bloco catch que manipule o problema após o código que pode lançar a exceção

*/

include 'Exemplo6.7.php';

try{

	$drink = new Entree('Glass of Milk', 'milk');
	if($drink->hasIngredient('milk')){

		print "Yummy!";
    }

}catch(Exception $e){

	print "Couldn't creat the drink: " . $e->getMessage();
}


?>