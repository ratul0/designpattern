<?php 
require 'vendor/autoload.php';

	$beverage = new Decorator\Decaf();
	echo $beverage->getDescription() . " $" . $beverage->cost();

	echo "\n";

	$beverage2 = new Decorator\Espresso();

	$beverage2 = new Decorator\Milk($beverage2);
	$beverage2 = new Decorator\Milk($beverage2);
	$beverage2 = new Decorator\Whip($beverage2);
	echo $beverage2->getDescription() . " $" . $beverage2->cost();


 ?>