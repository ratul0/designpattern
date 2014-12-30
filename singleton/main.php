<?php 
class Singleton{
	private static $unique;

	private function __construct(){

	}

	public static function getSingleton()
	{
		if(Singleton::$unique == null){
			Singleton::$unique = new Singleton();
		}
		return Singleton::$unique;
	}
}

var_dump( Singleton::getSingleton());