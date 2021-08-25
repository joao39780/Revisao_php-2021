<?php 
/*Exemplo 3.1 - Exibindo um menu select com while() */

print '<select name = "people">';

$i = 1;

while($i <= 10) //Expressão de teste, enquanto esta expressão for verdadeira o bloco de código sera executado.
{
	print "<option>$i</option><br>";

	$i++; //A variável $i é incrementada sempre que bloco de código é executado, para que não ocorra um loop infinito
}

/* após o bloco de código exibir <option>10</option>, a linha $i ++ aumenta $i para 11, então while verifica a expressão de teste $i <= 10 novamente, como 11 não é menor nem igual a 10, a estrutura while interrompe a execução do bloco de código. */
print '</select>';



















?>