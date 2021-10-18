<?php

require_once 'Exemplo8.2.php';
$q = $db->query('SELECT dish_name, price FROM dishes');
$rows = $q->fetchAll();
$count = count($rows);
print $count;


?>