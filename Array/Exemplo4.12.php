<?php 
/*Exemplo4.12 - Iterando por um array numérico com for() */

//Se quiser saber em que elemento você está ao iterar por um array numérico, use for() em vez de foreach(). Seu loop for() vai precisar de uma variável que comece em 0 e aumente em uma unidade sem ultrapassar o número de elementos do array.


$dinner = array('Sweet Corn and Aspargus', 
				'Lemon Chicken', 
				'Braised Bamboo Fungus');


for($i = 0, $num_dinner = count($dinner); $i < $num_dinner; $i++)
{

print "dish number $i is $dinner[$i]</br>";

}
















?>