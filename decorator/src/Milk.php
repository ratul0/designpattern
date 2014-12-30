<?php

namespace Decorator;

class Milk extends CondimentDecorator {
	public $beverage;

	public function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() . ", Milk";
	}

	public function cost()
	{
		return .10 + $this->beverage->cost();
	}
}