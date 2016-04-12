<?php
  class Bike{
    public $price;
    public $max_speed;
    public $miles = 0;
    function __construct($price,$max_speed){
      $this->price = $price;
      $this->max_speed = $max_speed;
      return $this;
    }
    function displayInfo(){
      echo 'price:'.$this->price. '<br>';
      echo 'max speed: '.$this->max_speed.'<br>';
      echo 'miles driven: '.$this->miles.'<br>';
      echo '<br>';
      return $this;
    }
    function drive(){
      echo 'Driving <br>';
      $this->miles+=10;
      return $this;
    }
    function reverse(){
      echo 'Reversing <br>';
      if($this->miles >=5){
        $this->miles-=5;
      }
      return $this;
    }
  }

  $bike1 = new Bike(100,30);
  $bike1->drive()->drive()->drive()->reverse()->displayInfo();

  $bike2 = new Bike(75,40);
  $bike2->drive()->drive()->reverse()->reverse()->displayInfo();

  $bike3 = new Bike(55,25);
  $bike3->reverse()->reverse()->reverse()->displayInfo();;
 ?>
