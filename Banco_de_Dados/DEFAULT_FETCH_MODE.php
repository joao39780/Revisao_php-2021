<?php

require_once 'Exemplo8.2.php';

//Não é preciso chamar setFetchMode() ou passar algo para fetch();
//setAttribute() se encarregará disso
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$q = $db->query('SELECT dish_name, price FROM dishes');
while($row = $q->fetch()){
	print implode(', ', $row). "</br>";
}


$another_query = $db->query('SELECT dish_name, price FROM dishes');
// Cada subarray de $moreDishes também é indexado numericamente
$moreDishes = $another_query->fetchAll();
?>