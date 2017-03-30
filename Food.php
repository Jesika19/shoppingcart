<?php
class Food extends Product{
  private $expiringDate;
  //Constructor
  function __construct($productRef,$productCategory,$name,$description,$price,$expiringDate){
    parent::__construct($productRef,$productCategory,$name,$description,$price);
    $this->setExpiringDate($expiringDate);      
  }
  //Get
  public function getExpiringDate(){
    return $this->expiringDate;
  }
  
  //Check expiring date
  public function setExpiringDate($expiringDate) {
    $timestamp = strtotime("now");
    if (strtotime($expiringDate) > $timestamp) {
          $this->expiringDate=$expiringDate;
    }
    else {
      throw new Exception("Invalid Date:The product has already expired.It cannot be inserted into the cart.Please remove it.");
      //print("Invalid Date:The product has already expired.It cannot be inserted into the cart").PHP_EOL;     
    }

  }
  


  
}
?>
