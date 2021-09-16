<?php 
/*Exemplo5.11 - Retornando um valor a partir de uma função*/

//Para retornar valores a partir das funções que você criar, use a palavra-chave return com um valor a ser retornado. Quando uma função é executada assim que encontra a palavra-chave return, ela interrompe a execução e retorna o valor associado.


function restaurant_check($meal, $tax, $tip){

$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
$total_amount = $meal + $tax_amount + $tip_amount;

return $total_amount;

}















?>