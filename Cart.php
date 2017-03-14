<?php
class Cart {

  protected $products = array();
    
  protected $productRefs = array(); 
  protected $voucher;
  protected $total;   
  public static $subTotal;
  
  //Constructor
  function __construct($products = '',$productRefs = '',$voucher = '',$total = '',$subTotal = ''){   
    $this->products = $products;
    $this->productRefs = $productRefs;
    $this->voucher = $voucher;   
    $this->total = $total;    
    $this->subTotal = $subTotal;  
  }

  //Get
  public function getProducts(){
    return $this->products;
  }

  public function getVoucher(){
    return $this->voucher;
  }

  public function getTotal(){
    return $this->total;
  }

  public function getSubTotal(){
   // $total = $product->getTotal();
    return self::$subTotal;
  }

  // public function getSubTotal(){

  //   return $this->subTotal;
  // }



  //Add Product
  public function addProduct(Product $product,$quantity){ 
      $productRef = $product->getProductRef();
      return $this->products = [$productRef =>["quantity" => $quantity]];    
  }



  //Remove Product
  public function removeProduct(Product $product){
    $productRef = $product->getProductRef();
    if (isset($this->products[$productRef])) {
        unset($this->products[$productRef]);

        // Remove the stored productRef, too:
        $index = array_search($productRef, $this->productRefs);
        unset($this->productRefs[$index]);

        // Recreate that array to prevent holes:
        $this->productRefs = array_values($this->productRefs);
    }
  
  }
  
  //Update products
  public function updateProduct(){


  }
  
  public function calculateTotal(Product $product){
    $quantity = $product->getQuantity();
    $price = $product->getPrice(); 
    return $total = ($quantity * $price);   
  }

 //Calculate subtotal
  //  public static function calculateSubTotal($voucher){  
  //   return self::$subTotal += ($total *(100-$voucher)/100);    
  // }



}  

?>