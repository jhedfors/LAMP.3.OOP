<?php
  class Deck{
    // public $deck[];

    function __construct(){
      $deck =  array();

      $suits = ['D','H','S','C'];
      $values = ['A','2','3','4','5','6','7','8','9','10','J','Q','K'];
      for ($i=0; $i < 4; $i++) {
        for ($j=0; $j < 13; $j++) {
          $deck[] = new Card($suits[$i],$values[$j]);
        }
      }

      $this->deck = $deck;
      shuffle($deck);
      var_dump($deck);
    }
    // public function shuffle(){
    //   // shuffle($deck) ;
    //
    //   var_dump($this);
    // }
    public function reset(){
      //put stuff here
    }
    public function deal(){
      //put stuff here
    }
  }
  class Card{
    public $suit;
    public $value;
    function __construct($suit,$value){
      $this->suit = $suit;
      $this->value = $value;
      return $this;
    }
  }
  $newDeck = new Deck();
  // var_dump($newDeck);
  $newDeck->shuffle();

 ?>
