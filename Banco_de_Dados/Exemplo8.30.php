<?php

require_once 'Exemplo8.2.php';
$q = $db->query('SELECT dish_name, price FROM dishes');
while($row = $q->fetch())
{
	print "$row[dish_name], $row[price]</br>";
}

?>