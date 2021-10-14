<?php

require_once 'Exemplo8.2.php';
$_POST['new_dish_name'] = 'Rato frito';
$_POST['new_price'] = 7.90;
$_POST['is_spicy'] = 2;
$stmt = $db->prepare('INSERT INTO dishes(dish_name, price, is_spicy) VALUES(?,?,?)');
$stmt->execute(array($_POST['new_dish_name'], $_POST['new_price'], $_POST['is_spicy']));



?>