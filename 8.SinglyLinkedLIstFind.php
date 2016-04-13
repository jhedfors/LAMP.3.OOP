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
  public function remove($val)
  {
    if($this->head->value == $val)
    {
       $this->head = $this->head->next;
    }
    else
    {
       $current = $this->head;
       while($current->next->value != $val && $current->next)
       {
         $current = $current->next;
       }
       $temp = $current->next->next;
       $current->next = $temp;
    }
  }
  public function find($val)
   {
     $current = $this->head;
     while($current != null)
     {
        if($current->value == $val)
        {
            return $current;
        }
        $current = $current->next;
     }
     return false;
   }
  }

  $newList = new SinglyLinkedList();
  $newList->add(1);
  $newList->add(2);
  $newList->add(3);
  $newList->add(4);
  $newList->add(5);

  var_dump($newList->find(3));

  var_dump($newList->find(99));
