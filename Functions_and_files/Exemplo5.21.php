<?php
/*Exemplo5.21 - Array $GLOBALS*/

//Há duas maneiras de acessar uma variável global a partir de uma função. A mais simples é procurá-la em um array especial chamado $GLOBALS. Qualquer variável global pode ser acessada como um elemento desse array.

$dinner = 'Curry Cuttlefish';

function macrobiotic_dinner(){

	$dinner = "Some Vegetables";
	print "Dinner is $dinner ";
	//Rende-se ás maravilhas do oceano
	print "but I'd rather have ";
	print $GLOBALS['dinner'];
	print "</br>";
}



macrobiotic_dinner();
print "Regular dinne is: $dinner";









?>