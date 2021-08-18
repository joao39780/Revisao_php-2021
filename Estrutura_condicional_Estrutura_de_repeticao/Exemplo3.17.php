<?php
$i = 1; //$i é configurado como 1
print '<select name="people">';
while($i <=10) //expressão de teste compara $i a 10. Enquanto $i for menor ou igual a 10
			   //as duas instruções do bloco de código serão executadas
{
	print "<option>$i</option><br>"; //primeira instrução imprimi uma tag HTML
	$i++; //segunda instruçaõ incrementa a variável $i, se não incrementassemos $i
}		 //a primeira instrução seria executada infinitamente.

print '</select>';










?>