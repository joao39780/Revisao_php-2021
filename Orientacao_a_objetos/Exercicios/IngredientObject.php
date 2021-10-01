<?php 
require 'ClassIngredient.php';
require 'ClassEntree_and_ClassExtends.php';


$salt = new \meal\Ingredient('Salt', 7.50);
$salt->IgredientCost(9.90);
$price = $salt->getPrice();
$sugar = new \meal\Ingredient('Sugar', 8.50);
$sugar->IgredientCost(10.90);
$pasta = new IngredientTotalCost('Pasta', array($salt, $sugar));
$total_cost = $pasta->TotalCost();
print $total_cost;
?>