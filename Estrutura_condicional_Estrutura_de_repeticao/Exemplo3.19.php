<?php 

/*Exemplo 3.19 - Várias expressões em for()*/

//Você pode combinar várias expressões na expressão de incialização e iteração separando-as com vírgula(,), geralmente utilizamos este método quando queremos alterar mais de uma variável


print '<select name = "doughnuts">';

for($min = 1, $max = 10; $min <= 50; $min += 10, $max += 10)
{

print "<option>$min - $max</option>";

}

print '</select>';

// A cada vez que o bloco de código é executado as variáveis $min e $max são incrementadas em 10 unidades, por meio do operador de atribuição +=





?>