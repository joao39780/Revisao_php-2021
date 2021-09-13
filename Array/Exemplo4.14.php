<?php 
/*Exemplo4.14 - A ordem dos elementos do array e foreach() */

//Se você tiver um array numérico, cujos elementos tiverem sido adicionados em uma ordem diferente de como suas chaves seriam normalmente ordenadas, isso pode produzir resultados inesperados.

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';

foreach($letters as $letter)
{
	print $letter;
}

print "<hr>";

//Para garantir que os elementos sejam acessados na ordem numérica das chaves, use for() para percorrer o loop.

for($i = 0, $nbm_letters = count($letters); $i < $nbm_letters; $i++ )
{

print $letters[$i];

}











?>