<?php 
/*Exemplo 4.28 - Criando arrays multidimensionais com array() e []*/


$meals = array('breakfast' => ['Walnut Bun', 'Coffee'],
               'lunch' => ['Cashew Nuts', 'White Mushrooms'],
               'snack' => ['Dried Mulberies', 'Salted Sesame Crab']);






$lunches = [['Chicken', 'Eggplant', 'Rice'],
            ['Beef', 'Scallions', 'Noodles'],
            ['Eggplant', 'Tofu']];



$flavors = array('Japanese' => array('hot' => 'wasaby',
									 'salty' => 'soy sauce'),
			     'Chinese' => array('hot' => 'mustard',
			 						'pepper-salty' => 'priclky ash'));





print $meals['lunch'][1]. '</br>';
print $meals['snack'][0]. '</br>';
print $lunches[0][0]. '</br>';
print $lunches[2][1]. '</br>';
print $flavors['Japanese']['salty'].'</br>';
print $flavors['Chinese']['hot'].'</br>';

?>