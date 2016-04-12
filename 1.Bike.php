<?php
  class Bike{
    public $price;
    public $max_speed;
    public $miles = 0;
    function __construct($price,$max_speed){
      $this->price = $price;
      $this->max_speed = $max_speed;
    }
    function displayInfo(){
      echo 'price:'.$this->price. '<br>';
      echo 'max speed: '.$this->max_speed.'<br>';
      echo 'miles driven: '.$this->miles.'<br>';
      echo '<br>';
    }
    function drive(){
      echo 'Driving <br>';
      $this->miles+=10;
    }
    function reverse(){
      echo 'Reversing <br>';
      if($this->miles >=5){
        $this->miles-=5;
      }

    }
  }


  $bike1 = new Bike(100,30);
  $bike1->drive();
  $bike1->drive();
  $bike1->drive();
  $bike1->reverse();
  $bike1->displayInfo();

  $bike2 = new Bike(75,40);
  $bike2->drive();
  $bike2->drive();
  $bike2->reverse();
  $bike2->reverse();
  $bike2->displayInfo();

  $bike3 = new Bike(55,25);
  $bike3->reverse();
  $bike3->reverse();
  $bike3->reverse();
  $bike3->displayInfo();

  //added functionality for min miles
  $bike4 = new Bike(55,25);
  $bike4->drive();
  $bike4->displayInfo();
  $bike4->reverse();
  $bike4->displayInfo();
  $bike4->reverse();
  $bike4->displayInfo();
  $bike4->reverse();
  $bike4->displayInfo();
  // var_dump($bike1);


 ?>
