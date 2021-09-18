<?php 
/*Exemplo5.16.php - Passando um valor de retorno para outra função*/

//O Exemplo 5.16 usa a nova função payment_method() passando para ela o resultado de restaurant_check().

require 'Exemplo5.12.php';
require 'Exemplo5.15.php';


$total = restaurant_check(15.22, 8.25, 15);
$method = payment_method(20, $total);


print 'I will pay with ' . $method;














?>