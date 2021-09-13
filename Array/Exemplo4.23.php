<?php 
/*Exemplo4.23 - Transformando uma string em um array com explode()*/

//A função oposta a implode se chama explode(). Ela divide uma string transformando-a em um array. O argumento delimitador é a string que ela deve procurar para separar os elementos do array.

$fish = 'Bass, Carp, Pike, Flounder';

$fish_list = explode(',', $fish);

print "The second fish is $fish_list[1]";























?>