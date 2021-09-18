<?php 
/*Exemplo5.23 - Palavra-chave global*/

//A segunda maneira de acessar uma variável global dentro de uma função é usando a palavra-chave global. Ela informa ao engine PHP que o uso adicional da variável citada dentro de uma função deve referenciar a variável global que tenha o nome fornecido e não uma variável local. Isso se chama "trazer uma variável para o escopo local."


$dinner = 'Curry Cuttlefish';

function vegatarian_dinner(){

	global $dinner;
	print "Dinner was $dinner, but now it's ";
	$dinner = 'Sauteed Pea Shoots';
	print $dinner;
	print "</br>";

}

print "Regular dinner is $dinner</br>";
vegatarian_dinner();
print "Regular dinner is $dinner";









?>