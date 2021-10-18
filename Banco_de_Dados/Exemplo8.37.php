<?php

require_once 'Exemplo8.2.php';
$cheapest_dish_info = $db->query('SELECT dish_name, price
								  FROM dishes ORDER BY price LIMIT 1')->fetch();

print "$cheapest_dish_info[0], $cheapest_dish_info[1]";

?>