<?php

enum Gender
{
  case Male;
  case Female;
}

class Customer
{

  public function __construct(
    public string $id,
    public string $name,
    public Gender $gender
  ) {
  }
}

function sayHello(Customer $customer): string
{
  if ($customer->gender == Gender::Male) {
    return "Hello Mr. $customer->name";
  } else if ($customer->gender == Gender::Female) {
    return "Hello Mrs. $customer->name";
  }
}

var_dump(sayHello(new Customer("1", "thariq", Gender::Male)));
var_dump(sayHello(new Customer("2", "cewek", Gender::Female)));
var_dump(Gender::cases());