<?php 
/*Exemplo5.12 - Usando um valor de retorno em uma instrução if()*/

//O valor que restaurant_check retorna pode ser usado como qualquer outro valor em um programa.


function restaurant_check($meal, $tax, $tip)
{

 $tax_amount = $meal * ($tax / 100);
 $tip_amount = $meal * ($tip / 100);
 $total_amount = $meal + $tax_amount + $tip_amount;

 return $total_amount;

}

$total = restaurant_check(15.22, 8.25, 15);

//print 'I only have $20 in cash, so...';

if($total > 20){

//print "I must pay with my credit card.";

}else{

//print "I can pay with cash.";

}


?>