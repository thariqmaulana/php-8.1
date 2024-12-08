<?php

enum Gender: string
{
  case Male = 'Mr';
  case Female = 'Mrs';

  public function sayHello()
  {
    return "Hello " . $this->value;
  }
  //bisa bikin fn di enum
  public function inIndonesia()
  {
   return match ($this) {
       Gender::Male => 'Tuan',
       Gender::Female=> 'Nyonya',
    };
  }

  public static function fromIndonesia(string $value): Gender 
  {
    return match ($value) {
      'Tuan' => Gender::Male ,
      'Nyonya'=> Gender::Female,
   };
  }
}

class Customer
{

  public function __construct(
    public string $id,
    public string $name,
    public ?Gender $gender
  )
  {
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

var_dump(Gender::Male->sayHello());
var_dump(Gender::Male->inIndonesia());
var_dump(Gender::fromIndonesia('Tuan'));