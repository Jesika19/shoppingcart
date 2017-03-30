<?php
class Clothing extends Product{
    private $size;
    private $colour;
    
  //Constructor
  function __construct($productRef,$productCategory,$name,$description,$price,$size,$colour){
    parent::__construct($productRef,$productCategory,$name,$description,$price);
    $this->size = $size;
    $this->colour = $colour;    
  }

  //Get
  public function getSize(){
    return $this->size;
  }

  public function getColour(){
    return $this->colour;
  }

}

?>