<?php

/**Dulu tidak bisa default value berupa obj */

class Category {
  public readonly string $id;
  public readonly string $name;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}

class Product {
  public function __construct(public string $name = '',//str kan bisa dari dulu. obj tidak bisa
                              public Category $category = new Category('0', 'default category') )
  {

  }
}

$product = new Product();
var_dump($product);