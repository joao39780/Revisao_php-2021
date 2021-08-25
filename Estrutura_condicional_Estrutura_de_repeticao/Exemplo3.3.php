<?php 
/*Exemplo 3.3 - Usando else com if()*/

//Para executar uma instrução diferente quando a expressão de teste de if() for falsa, adicione uma cláusula else.
// A primeira instrução print só é executada quando a expressão de teste de if() é verdadeira, já a segunda instrução print
// que está dentro da estrutura else só é executada quando o valor da expressão de teste for falso.

$logged_in = false; 
if($logged_in)
{

print "Welcome aboard trusted user";
}
else //estrutura else
{ 
	print "Howdy, stranger"; // bloco de instruções  da estrutura else
}














?>