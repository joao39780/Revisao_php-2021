<?php 
/*Exemplo5.13 - Retornando um array a partir de uma função*/

//Uma instrução return específica só pode retornar um único valor. Você não pode retornar vários valores com algo como return 15, 23. Para retornar mais de um valor a partir de uma função, podemos inserir os diferentes valores em um array e retornar o array.


function restaurant_check2($meal, $tax, $tip){

$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
$total_notip = $meal + $tax_amount;
$total_tip = $meal + $tax_amount + $tip_amount;

return array($total_notip, $total_tip);

}









?>