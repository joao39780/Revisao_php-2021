<?php 
/*Exemplo5.18 - Funções que retornam true ou false*/

//Uma expressão de teste também pode ser composta apenas por uma chamada de função sem uma comparação ou outro operador. Nesse tipo de expresão, o valor de retorno da função é convertido para verdadeiro ou falso.


require 'Exemplo5.12.php';


function can_pay_cash($cash_on_hand, $amount){

	if($amount > $cash_on_hand){

		return false;
  }else{

  	return true;
  }

}


$total = restaurant_check(15.22, 8.25, 15);

if(can_pay_cash(20, $total)){

	print "I can pay in cash.";


}else{

	print "Time for the credit card.";

}


?>