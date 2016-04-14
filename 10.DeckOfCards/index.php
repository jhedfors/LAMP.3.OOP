<?php

  class Deck{
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
      $this->shuffleCards();
    }
    public function shuffleCards(){
      shuffle($this->deck);
    }
    public function reset(){
      //put stuff here
    }
    public function deal(){
      $randomCard = rand(1,count($this->deck));
      $card = $this->deck[$randomCard];
      //still working on this
      var_dump($card);
      return $card->card;

    }
  }
  class Card{
    public $card;
    function __construct($suit,$value){
      $this->card = "$suit$value";
      return $this;
    }
  }


  class Player{

    public function __construct($name){
      $name;
      $hand = array();
      $this->name = $name;
      $this->hand = $hand;
    }
    public function draw(){
      // echo $newDeck->deal();
      // return deal();
    }

    public function discard(){

    }

  }

  class Game{
      public $players;
      // public $deck;

    public function __construct(){
      $this->deck = new Deck();
    }
    public function addPlayer($name){
      $this->players[] = new Player($name);
    }
    public function gameDeal(){
      //add stuff
    }
  }


  $newGame = new Game();
  $newGame->addPlayer('Jeff');
  $newGame->addPlayer('Kazu');


// $newGame->deck->shuffleCards();//this works
var_dump($newGame);


  // $newDeck = new Deck();
  // echo $newDeck->deal();
  // $player1->draw();
  // var_dump($player1);

 ?>
