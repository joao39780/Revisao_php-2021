<?php 
/*Exemplo4.18 - Executando operações com elementos de um array*/

//Vocẽ pode executar operações com elementos individuais de um array como faria com variáveis escalares comuns, usando operadores aritméticos, lógicos e de outros tipos.


$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon'] ++;
$dishes['Roast Duck']= 3;


$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];

if($dishes['total'] > 15)
{

	print "You ate a lot:";


}

print 'You ate ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon';














?>