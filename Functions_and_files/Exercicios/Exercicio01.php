<?php 
/*Exercicio01.php*/


function img_tag($url, $height = null, $width = null, $alt = null){


	$html = '<img src="'. $url .'"';

	if(isset($height)){

	$html .= 'height="'. $height .'"';
 	
 	}

 	if(isset($width)){

 		$html .= 'width="'. $width .'"';
 }

 if(isset($alt)){
 	$html .= 'alt="'. $alt .'"';
 }

 $html .= '>';


 return $html;

}



$img = img_tag('../Exercicios/a.jpeg', '200', '200', 'amigao?');


print $img;






?>