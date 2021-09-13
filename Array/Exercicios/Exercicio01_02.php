<?php 
/*Exercicio - 01, 02*/

$citys = array('Nova York, NY' => 8175133,
			   'Los Angeles, CA' => 3792621,
			   'Chicago, IL' => 2695598,
			   'Houston' => 2100263,
			   'Filadélfia, PA' => 1526006,
			   'Phoenix, AZ' => 1445632,
			   'San Antonio' => 1327407,
			   'Sand Diego, CA' => 1307402,
			   'Dallas, TX' => 1197186,
			   'San Jose, CA' => 945942);



$total_population = 0;



foreach($citys as $key => $value)
{

$total_population += $citys[$key];

}

asort($citys);

print "<table style='border:3px solid Red;'>";
print "<tr><td style='border:3px solid blue; font-weight:bold;'>State</td><td style='border:3px solid blue; font-weight:bold;'>Population</td></tr>";

foreach($citys as $key => $value)
{

print "<tr><td style='border:3px solid blue;'>$key</td><td style='border:3px solid blue;'>$value</td></tr>";


}

print "<tr><td style='border:3px solid purple; font-weight:bold;'>TOTAL POPULATION:</td><td style='border:3px solid purple; font-weight:bold;'>$total_population</td></tr>";

print "</table>";


?>