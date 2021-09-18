<?php 
/*Exemplo5.25 - Declarando um tipo de retorno*/

//O PHP7 também da suporte a declarações de tipo para o valor que uma função retorna. Para impor a verificação do tipo de retorno de uma função, insira dois pontos (:) após o parêntese que fecha a lista de argumentos e então inclua a declaração de tipo de retorno.

function restaurant_check($meal, $tax, $tip) : float{

	$tax_amount = $meal * ($tax / 100);
	$tip_amount = $meal * ($tip / 100);
	$total_amount = $meal + $tax_amount + $tip_amount;

	return $total_amount;

}


	//Se a função do Exemplo5.25 retornar algo diferente de um float, o engine PHP gerará um TypeError.









?>