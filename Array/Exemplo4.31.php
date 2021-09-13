<?php 
/*Exemplo4.31 - Iterando por um array multidimensional com foreach() */

//Para iterar por cada dimensão de um array multidimensional, você pode usar loops foreach() ou for() aninhados

$flavors = array('Japanese' => array('hot' => 'wasabi',
									 'salty' => 'soy sauce'),
				 'Chinese' => array('hot' => 'mustard',
									'pepper-salty' => 'prickly ash'));





// $culture é a chave $culture_flavor o valor (array)

/*Primeiro foreach*/
//$culture = 'Japanese', 'Chinese'
//$culture_flavors = array('hot' => 'Wasabi') ...


/*Segundo foreach*/
//$flavor = 'hot', 'salty', 'hot', 'pepper-salty'
//$example = 'wasabi', 'soy sauce', 'mustard', 'prickly ash'

foreach($flavors as $culture => $culture_flavors)
{


//$flavor é a chave e $example o valor
foreach($culture_flavors as $flavor => $example)
{
	print "A $culture $flavor flavor is $example<br>";
}

}




















?>