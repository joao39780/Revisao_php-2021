<?php 
/*Exemplo4.16 - Procurando um elemento com um valor específico */

//Para procurar um elemento com um valor específico, use in_array(), como mostra o Exemplo4.16

$meals = array('Walnut Bun' => 1,
			   'Cashew Nuts and Mulberries' => 4.95,
			   'Dried Mulberries' => 3.00,
			   'Eggplant with Chili Sauce' => 6.50,
			   'Shrimp Puffs' => 0);


$books = array("The Eater's Guide to Chinese Characters",
    		   'How to cook and Eat in Chinese');



//Aqui o valor é verdadeiro: a chave Dried Mulberries tem o valor 3.00
if(in_array(3, $meals))
{

print 'There is a $3 item.</br>';

}

//Esse também é verdadeiro
if(in_array('How to cook and Eat in Chinese', $books))
{

print "We have how to cook and Eat in Chinese";


}


//Esse é falso in_array() diferencia letras maiúsculas de minúsculas
if(in_array("the eater's guide to chinese characters"))
{

print "we the eater's guide to chinese characters";

}





?>