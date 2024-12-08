<?php

enum Gender: string
{
  case Male = 'Mr';
  case Female = 'Mrs';//untuk apa backed? nanti ada field namanya value
}

class Customer
{

  public function __construct(
    public string $id,
    public string $name,
    public ?Gender $gender
  ) {
  }
}

function sayHello(Customer $customer): string
{
  if ($customer->gender == null) {
    return "Hello $customer->name";
  } else {
    return "Hello " . $customer->gender->value . " " . $customer->name;
  }
}

// Gender::Male->value

var_dump(sayHello(new Customer("1", "thariq", Gender::Male)));
var_dump(sayHello(new Customer("2", "cewek", Gender::Female)));
var_dump(sayHello(new Customer("3", "cowok", Gender::from('Mr'))));
var_dump(sayHello(new Customer("4", "dinda", Gender::tryFrom('Mrss'))));
var_dump(Gender::cases());