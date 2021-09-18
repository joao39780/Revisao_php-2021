<?php 
/*Exemplo5.20 - Escopo das variáveis*/

//As variáveis locais e globais funcionam de maneira semelhante. Uma variável chamada $dinner existente dentro de uma função, seja ou não argumento dessa função, não tem conexao alguma com uma variável chamada $dinner fora dessa função ou com uma variável chamada $dinner existente dentro de outra função

$dinner = 'Curry cuttlefish';

function vegetarian_dinner(){

print "Dinner is $dinner, or ";

$dinner = 'Sauteed Pea Shoots';

print $dinner;

print "</br>";

}


function kosher_dinner(){

	print "Dinner is $dinner, or";

	$dinner = 'Kung Pao Chicken';

	print $dinner;

	print "</br>";
}


 print "Vegetarian ";

 vegetarian_dinner();

 print "Kosher";

 kosher_dinner();

 print "Regular dinner is $dinner";

?>