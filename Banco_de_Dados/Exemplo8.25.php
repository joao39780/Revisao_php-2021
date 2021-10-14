<?php

require_once 'Exemplo8.2.php';
$_POST['new_dish_name'] = 'Farofa Pronta Yoky';
$db->exec("INSERT INTO dishes(dish_name)
			VALUES('$_POST[new_dish_name]')");

?> 