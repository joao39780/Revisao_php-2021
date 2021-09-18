<?php 
/*Exemplo5.15 - Várias instruções return em uma função*/

function payment_method($cash_on_hand, $amount){

if($amount > $cash_on_hand){

	return 'credit card';

}else{
	return 'cash';
}



}






















?>