<?php

require_once 'Exemplo8.2.php';

$q = $db->query('SELECT dish_name, price FROM dishes');
//Não é preciso passar nada para fetch; setFetchMode()
//se encarregará disso
$q->setFetchMode(PDO::FETCH_NUM);

while($row = $q->fetch()){

	print implode(', ', $row) . "</br>";
}






?>