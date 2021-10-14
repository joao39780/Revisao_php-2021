<?php

require_once 'Exemplo8.2.php';
$_POST['new_dish_name'] = 'Farofa Pronta Yoki';
$stmt = $db->prepare('INSERT INTO dishes(dish_name) VALUES(?)');
$stmt->execute(array($_POST['new_dish_name']));


?>