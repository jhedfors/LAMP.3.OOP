<?php

Class Node{
 public function __construct($value)
 {
  $this->value= $value;
  $this->next = null;
 }
}

Class SinglyLinkedList{
 public function __construct()
 {
  $this->head = null;
 }
 public function add($val)
 {
  if($this->head == null)
  {
    $this->head = new Node($val);
  }
  else
  {
    $current = $this->head;
    while($current->next)
    {
      $current = $current->next;
    }
    $current->next = new Node($val);
  }
 }

}

$newList2 = new SinglyLinkedList();
$newList2->add(1);
$newList2->add(2);
$newList2->add(3);
$newList2->add(4);
$newList2->add(5);

var_dump($newList2);
 ?>
