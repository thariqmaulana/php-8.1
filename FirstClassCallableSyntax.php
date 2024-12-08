<?php

class Person {

  public function __construct(public string $name)
  {
    
  }

  public function sayHello($name): string
  {
    return "Hello $name, my name is $this->name";
  }
}

$person = new Person("thariq");

$reference = $person->sayHello(...);

var_dump($reference('Said'));

//tidak terbatas pada fn buatan. bahkan fn bawaan php

$reference2 = str_contains(...);