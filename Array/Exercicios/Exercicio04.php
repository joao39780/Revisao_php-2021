<?php 
/*Exercicio - 04*/



//As notas e os números de identificação dos alunos de uma classe
$students = array('James D. McCawley' => array('grade' => 'A+', 'id' => 271231),
			      'Buwei Yang Chao' => array('grade' => 'A', 'id' => 818211));




asort($students);

print "<h3 style='text-align:center;'>a. As notas eos números de identificação dos alunos de uma classe<h3>";

print "<table>";
foreach($students as $key => $value)
{

foreach($value as $sub_key => $sub_value)
{
	print "<tr><td>$key</td><td>$sub_key</td><td>$sub_value</td></tr>";
}


}

print "</table>";

print "<hr>";


//Quantos de cada item existem em um estoque
$storage = array('Oil' => array('Qty/un' => 45),
			     'Coal' => array('Qty/un' => 100),
			     'Silver' => array('Qty/un' => 15));

print "<h3 style='text-align:center;'>b. Quantos de cada item de uma loja existem no estoque<h3>";

print "<table>";

foreach($storage as $item => $Qty)
{

foreach($Qty as $un => $value)
{

print "<tr><td>$item</td><td>$un</td><td>$value</td></tr>";

}


}



print "</table>";

print "<hr>";

print "<h3 style='text-align:center;'>c. As refeições de uma escola para uma semana: as diferentes partes de cada refeição(entrada, acompanhamento, bebida etc.) eo custo a cada dia<h3>";

//As refeições de uma escola para uma semana: as diferentes partes de cada refeição(entrada, acompanhamento, bebida etc.) eo custo a cada dia
$weekly_meals = array('Mon' => array('Meal Name' => 'Rice with Chili Beans', 
									 'entree' => 'Soy sauce', 
									 'drink' => 'Mulberies Juice',
									 'Cost' => 13.50),
            		  
            		  'Tue' => array('Meal Name' => 'Raw Beef',
            			  			 'entree' => 'Toasted Botatos',
            			  			 'drink' => 'Blueberries Juice',
            			  			 'Cost' => 8.90),
            		   
            		   'Wed' => array('Meal Name' => 'Baked Rat',
            		                        'entree' => 'Fried Rats with melted cheese',
            		                        'drink' => 'Petrol',
            		                        'Cost' => 100.90), 
            		  
            		  'Thu' => array('Meal Name' => 'Dried Cockroach',
            		   				 'entree' => 'Dried Cockroach with mustard sauce',
            		   				 'drink' => 'Orange Juice',
            		   				 'Cost' => 250.90),
            		  
            		  'Fri' => array('Meal Name' => 'Baked Pigeon',
            		  				 'entree' => 'Baked Pigeon on pepper sauce',
            		  				  'drink' => 'Ethanol',
            		  				  'Cost' => 95.32)	);



print "<table>";

 foreach($weekly_meals as $week_day => $meal)
 {

 	foreach($meal as $features => $value)
 	{

 		print "<tr><td style='font-weight:bold;'>$week_day</td><td style='font-weight:bold;'>$features</td><td>$value</td></tr>";
 	}


 }


print "</table>";



print "<hr>";

/*Os nome dos integrantes de sua familia

print "<h3 style='text-align:center;'>d. Os nome dos integrantes de sua familia <h3>";

$family = ['Robs Antony', 'Luccoa Kazuto', 'Kabuto Yeager'];



foreach($family as $value)
{
	print "$value<br>";
}





*/

print "<h3 style='text-align:center;'>d. Os nomes e as idades e o grau de parentesco que você tem com as pessoas de sua família<h3>";


$family = array('Steven Stolen' => array('Relation' => 'Father', 'Age' => 47),
				'George Washiton' => array('Relation' => 'Brother', 'Age' => 22),
			    'Abgail Thorne' => array('Relation' => 'Mother', 'Age' => 43));


print "<table>";
foreach($family as $menber => $value)
{

foreach($value as $meber_information => $sub_value)
{
	print "<tr><td style='font-weight:bold;'>$menber</td><td>$meber_information</td><td>$sub_value</td></tr>";
}

}
print "</table>";

?>