<?php

/**Apa beda dengan union types?
 * union itu or
 * intersection and. jadi dia harus turunan a,b,c seluruhnya misalnya
 */

interface HasBrand
{
  function getBrand(): string;
}

interface HasName
{
  function getName(): string;
}

class Car implements HasBrand, HasName
{

  public function __construct(
    public string $brand,
    public string $name,
  ) {
  }

  public function getBrand(): string
  {
    return $this->brand;
  }

  public function getName(): string
  {
    return $this->name;
  }
}

function printBrandAndName(HasBrand & HasName $value)
{
  echo $value->getBrand() . '-' . $value->getName() . PHP_EOL;
}

printBrandAndName(new Car('toyota', 'avanza'));
