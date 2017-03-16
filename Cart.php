<?php
class Cart {

  protected $products = array();
    
  protected $productRefs = array(); 
  protected $quantity;
  protected $voucher;
  protected $total;   
  protected $subTotal;
  
  //Constructor
  function __construct($products = '',$productRefs = '',$quantity = '',$voucher = '',$total = '',$subTotal = ''){   
    $this->products = $products;
    $this->productRefs = $productRefs;     
    $this->quantity = $quantity;  
    $this->voucher = $voucher;   
    $this->total = $total;    
    $this->subTotal = $subTotal;  
  }

  //Get
  public function getProducts(){
    return $this->products;
  }

  public function getProductRefs(){
    return $this->productRefs;
  }

  public function getQuantity(){
    return $this->quantity;
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



  //Add Product
  public function addProduct(Product $product,$quantity){ 
    $productRef = $product->getProductRef();
    return $this->products = [$productRef =>["quantity" => $quantity]];
    $this->productRefs = $productRef;

  }



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
  public function updateProduct(Product $product,$quantity){
     $productRef = $product->getProductRef();
    if ($quantity === 0) {
            $this->deleteItem($product);
       }
     elseif (($quantity > 0) && ($quantity != $this->products[$productRef]['quantity'])) {
        $this->products[$productRef]['quantity'] = $quantity;
    }

    

  }
  

  public function calculateTotal(Product $product){

    //$quantity = $product->getQuantity();
    $price = $product->getPrice(); 
    return $total = ($this->quantity * $price);   
  }

 //Calculate subtotal

 public  function calculateSubTotal(Product $product,$voucher){
    //$quantity = $product->getQuantity();
    $price = $product->getPrice(); 
    $this->total = ($this->quantity * $price);     
    return $subTotal = ($this->total *(100-$voucher)/100);    
  }


}  

?>