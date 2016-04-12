<?php
  class Car{
    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax = '0.12';
    function __construct($price,$speed,$fuel,$mileage){
      $this->price =$price;
      $this->speed =$speed;
      $this->fuel =$fuel;
      $this->mileage =$mileage;
      if ($this->price > 10000) {
        $this->tax = '0.15';
      }
      return $this->Display_all();
    }
    function Display_all(){
      echo "<br>Price: ".$this->price."<br>Speed: ".$this->speed."<br>Fuel: ".$this->fuel."<br>Mileage: ".$this->mileage."<br>Tax: ".$this->tax."<br>";
    }
  }

  $car1 = new Car('2000','35mph','Full','15mpg');
  $car2 = new Car('2000','5mph','Not Full','105mpg');
  $car3 = new Car('2000','25mph','Kind of Full','95mpg');
  $car4 = new Car('20000','45mph','Empty','25mpg');
  $car5 = new Car('200000','35mph','Empty','15mpg');


 ?>
