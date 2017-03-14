<?php
class Food extends Product{
  private $expiringDate;

  //Constructor
  function __construct($productRef,$productCategory,$name,$description,$quantity,$price,$expiringDate){
    parent::__construct($productRef,$productCategory,$name,$description,$quantity,$price);
    $this->expiringDate = $expiringDate;   
   
  }

  //Get
  public function getExpiringDate(){
    return $this->expiringDate;
  }

}

?>
