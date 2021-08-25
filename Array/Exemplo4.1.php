<?php 
/*Exemplo 4.1 - Criando um array*/

//Para criar um array utilize a estrutura array() do php, nesta estrutura insira uma lista de pares de chave/valor separados por vírgula e delimitando a chave do valor com (=>)

$vegetables = array('corn' => 'yellow',
					'beet' => 'red',
					'carrot' => 'orange');

$dinner = array(0 => 'Sweet corn and aspargus',
				1 => 'Lemon chicken',
				2 => 'Braised Bamboo Fungus');




$computer = array('trs-80' => 'Radio Shack',
				  2600 => 'Atari',
				  'Adam' => 'Coleco');


print '<div style="height:500px; width:570px; border: dashed; border-color:red;">';
print '<h1 style="display:flex; justify-content:center; align-items:center;">Array vegetables</h1>';
print_r($vegetables);

print '<hr>';
print '<h1 style="display:flex; justify-content:center; align-items:center;">Array dinner</h1>';
print_r($dinner);

print '</div>'


?>