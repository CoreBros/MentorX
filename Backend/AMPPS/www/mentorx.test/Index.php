<?php

// Functions and Conditionals

	// function greet(){
	// 	echo 'Hello World';
	// }

	// function greet($name){
	// 	echo 'Hello '.$name;
	// }

	// function greet($greeting, $name='John'){
	// 	echo strtoupper($greeting.' '.$name);
	// }

	// greet('Welcome','Breezy');

	// $num1 = 100;
	// $num2 = 50;

	// if($num1 > $num2){
	// 	echo 'Correct';
	// 	}
	// 	else {
	// 	echo 'WRONG';
	// }

	// $num1 = 40;
	// $num2 = 50;

	// if($num1 == 40){
	// 	echo 'Correct';
	// } elseif($num1 == 50) {
	// 	echo 'Correct-o';
	// } else {
	// 	echo 'WRONG';
	// }

// $num1 = 40;
// $num2 = 20;

// if ($num1 == 50 || $num == 40){
// 	echo 'Correct';
// } else {
// 	echo 'WRONG';
// }

// $num1 = 40;
// $num2 = 20;

// if ($num1 == 40 && $num2 == 20){
// 	echo 'Correct';
// } else {
// 	echo 'WRONG';
// }

// Class Inheritance

// class First{
// 	public $id = 23;
// 	protected $name = 'John Doe';

// 	public function saySomething($word){
// 		echo $word;
// 	}
// }

// class Second extends First{
// 	public function getName(){
// 		echo $this->name;
// 	}
// }

// $second = new Second;

// echo $second->getName();
// echo $second->saySomething('Hello World');


// Static methods and static keywords

// class User{
// 	public $username;
// 	public static $minPassLength = 5;

// 	public static function validatePassword($password){
// 		if(strlen($password) >= self::$minPassLength){
// 			return true;
// 		} else {
// 			return false;
// 		}
// 	}
// }

// $password = 'password';

// if(User::validatePassword($password)){
// 	echo 'Password is valid';
// }	else {
// 	echo 'Password is NOT valid';
// }

// Abstract classes and methods

// abstract class Animal {
// 	public $name;
// 	public $color;

// 	public function describe(){
// 		return $this->name.' is '.$this->color;
// 	}

// 	abstract public function makeSound();
// }

// class Duck extends Animal {
// 	public function describe(){
// 		return parent::describe();
// 	}

// 	public function makeSound(){
// 		return 'Quack';
// 	}
// }


// class Dog extends Animal {
// 	public function describe(){
// 		return parent::describe();
// 	}

// 	public function makeSound(){
// 		return 'Bark';
// 	}
// }

// $animal = new Dog();
// $animal->name = 'Ben';
// $animal->color = 'Yellow';
// echo $animal->describe();

// Autoloading Classes & Final Keyword

// spl_autoload_register(function($class_name){
// 	include $class_name.'.php';

// });

// include 'Foo.php';
// include 'Bar.php';

// $foo = new Foo;
// $Bar = new Bar;

// $Bar->sayHello();

// Object Iteration

class People{
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';

	public $person4 = 'john';
	private $person5 = 'Jen';

// 	function iterateObject(){
// 		foreach($this as $key => $value){
// 			print "$key => $value\n";
// 		}
// 	}

}


$people = new People;

foreach($people as $key => $value){
	print "$key => $value\n";
}
// $people->iterateObject();



?>

<!-- php.net -->
<!-- single equal sings means to assign something, double equals sign is to compare something -->
<!-- || means 'OR', && means 'AND' -->