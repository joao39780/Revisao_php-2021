<?php

require_once 'Exemplo8.2.php';
//Diminui o preço de alguns pratos
$count = $db->exec("UPDATE dishes SET price = price - 5 WHERE price > 3");
print 'Changed the price of ' . $count . 'rows';
?> 