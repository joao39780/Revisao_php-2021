<?php 
/*Exemplo4.4 - Colisão entre variável de array e escalar*/

//Nomes para variáveis que contêm arrays seguem as mesmas regras dos nomes de qualquer outra variável. Os nomes de arrays e de variáveis escalares vêm do mesmo conjunto  de nomes possíveis, logo, não podemos ter ao mesmo tempo uma variável de array e uma variável escalar $chamadas $vegetables.


//Essa instrução transforma $vegetables em um array
$vegetables['corn'] = 'yellow';


//Essa remove qualquer traço de "corn" e "yellow" e torna $vegetables em uma variável escalar
$vegetables = 'delicious';

//A instrução a seguir transforma $fruits em uma variável escalar
$fruits = 283;


/*Essa não funciona -- $fruits continua sendo 283 e o engine PHP emite um aviso
$fruits['potassium'] = 'banana'; */

//Já essa sobrepões $fruits que passa a ser um array
$fruits = array('potassium' => 'banana');







?>