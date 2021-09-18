<?php 
/*Exemplo5.19 - Atribuição e chamada de função dentro de uma expressão de teste*/

//Um atalho frequente é usar uma chamada de função com o operador de atribuição em uma expressão de teste e esperar que o resultado  da atribuição seja o valor que está sendo atribuido

function complete_bill($meal, $tax, $tip, $cash_on_hand){

	$tax_amount = $meal * ($tax / 100);
	$tip_amount = $meal * ($tip / 100);
	$total_amount = $meal + $tax_amount + $tip_amount;
	if($total_amount > $cash_on_hand){

		//a conta é maior que a quantia que temos

		return false;
	}else{

		//Podemos pagar essa quantia

		return $total_amount;
}

}



	if($total = complete_bill(15.22, 8.25, 15, 20)){


	print "I happy to pay $total";		

	}else{


		print "I don't have enough money, shall I wash some dishes?";
	}


?>