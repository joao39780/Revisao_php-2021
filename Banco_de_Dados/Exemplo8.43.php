<?php 

require_once 'Exemplo8.2.php';

/*Se usarmos apenas índices numéricos será fácil de agrupar os valores
$q = $db->query('SELECT dish_name, price FROM dishes');
while($row = $q->fetch(PDO::FETCH_NUM)){

	print implode(',', $row) . "</br>";
}


*/

//Com o uso de um objeto, a sintaxe de acesso às propriedades obtém os valores
$q = $db->query('SELECT dish_name, price FROM dishes');
while($row = $q->fetch(PDO::FETCH_OBJ)){

	print "{$row->dish_name} has {$row->price}</br>";
}
?>