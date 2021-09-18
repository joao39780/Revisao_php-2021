<?php 
/*Exemplo5.17 - Usando valores de retorno com if()*/

//O Exemplo 5.17 decide o que fazer chamando a função restaurant_check a partir da expressão de teste de uma instrução if().

require 'Exemplo5.12.php';


if(restaurant_check(15.22, 8.25, 15) < 20){

print "Less than $20, I can pay cash.";

}else{

print "Too expensive, I need my credit card";

}









?>