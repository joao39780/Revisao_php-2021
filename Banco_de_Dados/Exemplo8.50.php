<?php

require_once 'Exemplo8.2.php';

//Primeiro, faz a inserção comum das aspas do valor 
$dish = $db->quote($_GET['dish_search']);

//Em seguida, insere barras invertidas antes de sublinhados e sinais de porcentagem
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
//Agora, $dish está sanitizada e poder ser interpolada na consulta
$stmt = $db->query("SELECT dish_name, price FROM dishes WHERE dish_name LIKE $dish");


while($row = $stmt->fetch()){

	print "$row[0], $row[1]";
}



?>