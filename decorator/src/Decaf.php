<?php
namespace Decorator;
class Decaf extends Beverage{
	public function __construct(){
		$this->description = "Decaf Coffee";
	}

	public function getDescription(){
		return $this->description;
	}

	public function cost(){
		return 1.05;
	}
}