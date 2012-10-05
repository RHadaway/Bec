<?php 
class Animal
{

	public $shungry = 'hell yeah I am hungry!';


	function eat($food)

	{
		if ($food == 'salad')
		{

			$this->shungry = 'not so much.';
		}

	}

}

interface Gender
{
	const MALE= 'm';
	const FEMALE = 'f';
}

interface Showable
{
	public function show();
}

class Dog extends Animal implements Gender, Showable
{
	function __construct($sBreed)
	{
		$this->sBreed = ($sBreed);
		$this->sGender = Gender::MALE;
		$this->show();
	}
	function show()
	{
		foreach($this as $name => $value){
			echo "<li>$name = $value</li>";
		}
	}
}?>