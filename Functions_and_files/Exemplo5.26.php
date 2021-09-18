<?php 
/*Exemplo5.26 - Definindo funções em seu próprio arquivo*/

function restaurant_check($meal, $tax, $tip){

	$tax_amount = $meal * ($tax / 100);
	$tip_amount = $meal * ($tip / 100);
	$total_amount = $meal + $tax_amount + $tip_amount;

	return $total_amount;

}


function payment_method($cash_on_hand, $amount){

	if($amount > $cash_on_hand){
		return 'Credit card';
	}else{

		return 'cash';
	}
}




?>