<?php

require_once 'Exemplo8.2.php';
$_POST['dish_search'] = 'Feijoada';
$stmt = $db->prepare('SELECT dish_name, price FROM dishes WHERE dish_name LIKE ?');
$stmt->execute(array($_POST['dish_search']));

while($row = $stmt->fetch()){
	print "$row[0], $row[1]"; 
}



?>