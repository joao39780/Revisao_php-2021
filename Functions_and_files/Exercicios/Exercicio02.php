<?php 
/*Exercicio02.php*/


function img_tag($file_name, $alt = null, $height = null, $width = null){

    if(isset($GLOBALS['image_path'])){
        $file_name = $GLOBALS['image_path'] . $file_name;
    }
    
    $html = '<img src="'. $file_name .'"';
    
    if(isset($alt)){
        $html .= 'alt="'. $alt .'"';
    }

    if(isset($height)){
        $html .= 'height="'. $height .'"';
    }

    if(isset($width)){
        $html .= 'width="'. $width .'"';
    }

    $html .= '>';
    return $html;
}

//$img = img_tag('a.jpeg', '200', '200', 'amigao?');


//print $img;

?>