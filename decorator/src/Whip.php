<?php

namespace Decorator;

class Whip extends CondimentDecorator {
	public $beverage;

	public function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() . ", Whip";
	}

	public function cost()
	{
		return .15 + $this->beverage->cost();
	}
}