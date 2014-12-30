<?php
namespace Strategy;
class FlyWithWings implements FlyBehavior{
	public function fly(){
		echo "I'm flying!!";
	}
}