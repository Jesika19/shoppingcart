<?php
class Product {
  protected $productRef;
  protected $productCategory;
  protected $name;
  protected $description;
  protected $price;  
      
  //Constructor
  function __construct($productRef = null,$productCategory = null,$name = null,$description = null,$price = null){
    $this->productRef = $productRef; 
    $this->productCategory = $productCategory;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;  
  }

  //Get
  public function setProductRef($value){
    $this->productRef = $value;
    return $this;
  }

  public function getProductRef(){
    return $this->productRef;
  }

  public function getProductCategory(){
    return $this->productCategory;
  }

  public function setName($value){
    $this->name = $value;
    return $this;
  }

  public function getName(){
    return $this->name;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getPrice(){
    return $this->price;
  }
}
?>