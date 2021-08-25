<?php 
/*Exemplo 3.6 - Operador de igualdade */

//O operador de igualdade é representado pelo símbolo de ==, ele retornará verdadeiro quando dois valores comparados são iguais.
//Este operador pode ser usado em conjunto com variáveis ou literais.

$new_messages = 11;
$max_messages = 11;
$dinner = 'Braised Scallops';

if($new_messages == 10)
{
	print "You have ten new messages";
}

if($new_messages == $max_messages)
{
	print "you have the maximum number of messages<br><hr>";
}

if($dinner ==  'Braised Scallops')
{
	print "Yum! I love seafood<br><hr>";
}
















?>