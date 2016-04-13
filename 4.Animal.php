<?php
  class Animal
  {
    public $name = "Animal";
    public $health = 100;

    public function __construct()
    {
      return $this;
    }
    public function walk()
    {
      $this->health-=1;
      return $this;
    }
    public function run()
    {
      $this->health-=5;
      return $this;
    }
    public function displayHealth()
    {
      echo "Name: ".$this->name."<br>";
      echo "Health: ".$this->health."<br>";
      return $this;
    }
  }

  class Dog extends Animal
  {
    public function __construct(){
      parent:: __construct();
      $this->name = "Dog";
      $this->health = 150;
      return $this;
    }
    public function pet()
    {
      $this->health+=5;
      return $this;
    }
  }

  class Dragon extends Animal
  {
    public function __construct(){
      parent:: __construct();
      $this->name = "Dragon";
      $this->health = 170;
      return $this;
    }
    public function fly()
    {
      $this->health-=10;
      return $this;
    }
  }
echo "<br>1. Create an instance of the animal called 'animal' and have this animal walk three times, run twice, and have it display its health.<br><br>";
$animal = new Animal();
$animal->walk()->walk()->walk()->run()->run()->displayHealth();
// $animal->pet()->displayHealth();//tested, and correctly failed

echo "<br>2. Now, create another class called Dog that inherits everything that the Animal does and has, but 1) have the default health be 150 and 2) add a new method called pet, which when invoked, increases the health by 5. Have the Dog walk three times, run twice, petted once, and have it display its health.<br><br>";

$dog = new Dog();
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

echo "<br>3. Now, create another class called Dragon that inherits everything that the Animal has and does, with these two changes: 1) have the default health be 170 and 2) add a new method called fly, which when invoked, decreases the health by 10. Have the Dragon walk three times, run twice, fly twice, and have it display its health. When the Dragon's displayHealth function is called have it say 'this is a dragon!' before it displays the default information (make sure you still call the parent's displayHealth function).<br><br>";

$dragon = new Dragon();
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

 ?>
