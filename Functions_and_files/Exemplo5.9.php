<?php 
/*Exemplo5.9 - Alterando valores de um argumento*/

//Qualquer alteração que você fizer em uma variável passada como argumento para uma função não afetará a variável fora da função.

function countdown($top)
{

while($top > 0)
{

print "$top..";

$top --;
}

	print "boom!<br>";
}



$counter = 5;

countdown($counter);

print "Now, counter is $counter";












?>