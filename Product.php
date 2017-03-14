<?php
class Product {
  protected $productRef;
  protected $productCategory;
  protected $name;
  protected $description;
  protected $quantity;
  protected $price;  
      
  //Constructor
  function __construct($productRef = ' ',$productCategory = ' ',$name = ' ',$description = ' ',$quantity = ' ',$price = ' '){
    $this->productRef = $productRef; 
    $this->productCategory = $productCategory;
    $this->name = $name;
    $this->description = $description;
    $this->quantity = $quantity;
    $this->price = $price;  
  }

  //Get
  public function getProductRef(){
    return $this->productRef;
  }

  public function getProductCategory(){
    return $this->productCategory;
  }

  public function getName(){
    return $this->name;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getQuantity(){
    return $this->quantity;
  }

  public function getPrice(){
    return $this->price;
  }
}
?>