<?php


$random_array = array(array('Random_texture', 'Random_texture1', 'Random_texture2', 'Random_texture3'),
					  array('Random_txt', 'Random_txt1', 'Random_txt2', 'Random_txt3'),
					  array('Random_file', 'Random_file1', 'Random_file2', 'Random_file3'));





print "<h3 style='text-align:center;'>Percorrendo um array multidimensional com foreach</h3>";

print "<table>";
foreach($random_array as $key => $value)
{

foreach($value as $sub_key => $sub_value)
{
	print "<tr><td>$key</td><td>$sub_key</td><td>$sub_value</td></tr>";
}

}
print "</table>";



print "<hr>";


print "<h3 style='text-align:center;'>Percorrendo um array multidimensional numérico com for()</h3>";


for($i = 0, $nbm_random = count($random_array); $i < $nbm_random; $i++)
{

for($m = 0, $sub_nbm = count($random_array[$i]); $m < $sub_nbm; $m++)
{

	print "position [$i][$m] is:" . $random_array[$i][$m] . "</br>";
}

}







?>