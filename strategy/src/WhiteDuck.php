<?php 
namespace Strategy;
class WhiteDuck extends Duck{
	public function __construct(){

		$this->flyBehavior = new FlyWithWings();
		//parent::setFlyBehavior(new FlyWithWings());
		
	}

} 