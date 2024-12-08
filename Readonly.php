<?php

/**datanya hanya bisa ditentukan 1 kali. melalui setter atau constructor 
 * disarankan melalui constructor
 * bisa dipakai di fitur promote
*/

class Category {
  public readonly string $id;// jadi tidak perlu di private kan lagi. public namun aman
  public readonly string $name;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }
}

$category = new Category('1', 'abc');
// $category->setId('1');
// $category->setId('2');error