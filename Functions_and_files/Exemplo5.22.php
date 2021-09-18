<?php 
/*Exemplo5.22 - Modificando uma variável com $GLOBALS*/

//O Exemplo5.21 acessa a variável global dinner a partir da função usando $GLOBALS['dinner']. O array $GLOBALS também pode modificar variáveis globais.

$dinner = 'Curry Cuttlefish';

function hungry_dinner(){

	$GLOBALS['dinner'] .= 'and Deep Fried Taro';

}

print "Regular dinner is: $dinner";

print "</br>";

hungry_dinner();

print "hungry_dinner is: $dinner";












?>