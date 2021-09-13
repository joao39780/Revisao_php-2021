<?php 
/*Exemplo4.15 - Procurando um elemento com a chave específica */

//Para procurar um elemento pela sua chave, use a função array_key_exists(). Essa função retorna verdadeiro quando um elemento com a chave fornecidade existe no array em questao


$meals = array('Walnut Bun' => 1,
			   'Cashew Nuts and Mulberries' => 4.95,
			   'Dried Mulberries' => 3.00,
			   'Eggplant with Chili Sauce' => 6.50,
			   'Shrimp Puffs' => 0);



$books = array("The Eater's Guide to Chinese Characters", 'How to Cook and Eat in Chinese');



//Aqui temos um resultado verdadeiro
if(array_key_exists('Shrimp Puffs', $meals))
{

print "Yes, we have Shrimp Puffs</br>";

}



//Esse é falso
if(array_key_exists('Steak Sandwich', $meals))
{

print "We have a Steak Sandwich";

}


//E esse também é verdadeiro
if(array_key_exists(1, $books))
{

print "Element 1 is How to Cook and Eat in Chinese";

}







?>