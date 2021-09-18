<?php 
/*Exemplo5.24 - Declarando o tipo de um argumento*/

//Na definição de uma função, a declaração de tipo vem antes do nome do argumento.

function countdown(int $top){

	while ($top > 0) {
		print "$top..";
		$top--;
	}

	print "Boom!</br>";

}


$counter = 5;

countdown($counter);

print "Now, counter is $counter";










?>