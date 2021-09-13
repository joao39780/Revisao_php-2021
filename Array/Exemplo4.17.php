<?php 
/*Exemplo4.17 - Encontrando um elemento com um valor específico*/

//A função array_search() é semlhante a in_array(), mas quando encontra um elemento, retorna sua chave verdadeiro.


$meals = array('Walnut Bun' => 1,
			   'Cashew Nuts and Mulberries' => 4.95,
			   'Dried Mulberries' => 3.00,
			   'Eggplant with Chili Sauce' => 6.50,
			   'Shrimp Puffs' => 0);



$dish = array_search(6.50, $meals);


if($dish)
{

print "$dish costs \$6.50";

}















?>