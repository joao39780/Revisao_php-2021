<?php 
/*Exercicio02.php*/

$url_add = '../Exercicios/';

function img_tag($file_name, $height = null, $width = null, $alt = null){

global $url_add;
    
    $html = '<img src="'.$url_add.'';
    $html .= ''.$file_name.'"';
    
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

//$img = img_tag('a.jpeg', '200', '200', 'amigao?');


//print $img;

?>