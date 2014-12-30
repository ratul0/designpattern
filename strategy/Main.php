<?php 

require 'vendor/autoload.php';





$whiteDuck = new Strategy\WhiteDuck();
print_r($whiteDuck->performFly());
$whiteDuck->setFlyBehavior(new Strategy\FlyNoWay());
print_r($whiteDuck->performFly());
//var_dump($whiteDuck->performFly());
