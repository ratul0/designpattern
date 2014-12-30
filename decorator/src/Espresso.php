<?php
namespace Decorator;
class Espresso extends Beverage{
	public function __construct(){
		$this->description = "Espresso";
	}

	public function getDescription(){
		return $this->description;
	}

	public function cost(){
		return 1.99;
	}
}