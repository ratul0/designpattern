<?php

namespace Decorator;

abstract class Beverage{

	public $description = "Unknown Beverage";

	abstract public function getDescription();

	

	public abstract function cost();

}