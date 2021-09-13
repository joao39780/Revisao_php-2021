<?php 
/*Exemplo4.11 - Usando foreach() com arrays numéricos */

//Há uma forma mais concisa de foreach() para ser usada com arrays numéricos. No entanto, você não poderá acessar as chaves dos elementos dentro do bloco de códigos.

$dinner = array('Sweet Corn and Aspargus', 
				'Lemon Chicken', 
				'Braised Bamboo Fungus');



foreach($dinner as $dish)
{


print "You can eat: $dish</br>";

}













?>