<?php
class Food extends Product{
  private $expiringDate;

  //Constructor
  function __construct($productRef,$productCategory,$name,$description,$price,$expiringDate){
    parent::__construct($productRef,$productCategory,$name,$description,$price);
    $this->expiringDate = $expiringDate;      
  }

  //Get
  public function getExpiringDate(){
    return $this->expiringDate;
  }

}

?>
