<?php 
namespace Strategy;
abstract class Duck{

	public $flyBehavior;

	public function setFlyBehavior(FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}

	

	public function performFly(){
		$this->flyBehavior->fly();
	}


}
