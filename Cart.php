<?php
  class Cart {
  protected $products = [];    
  protected $quantity;
  protected $voucher;
  protected $total = [];   
  protected $subTotal;

  
  //Constructor
  function __construct($products = [],$quantity = 0,$voucher = 0,$total = [],$subTotal = 0){     
    $this->products = $products;
    $this->quantity = $quantity;  
    $this->voucher = $voucher;   
    $this->total = $total;    
    $this->subTotal = $subTotal;  
  }
  
 
  //Get
  public function getProducts(){
    return $this->products;
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
    return $this->subTotal;
  }

  //Add Product
  public function addProduct(Product $product,$quantity){ 
    $productRef = $product->getProductRef();
    $this->products[$productRef] = ["quantity" => $quantity, "item" => $product];  
  }
  //Remove Product
  public function removeProduct(Product $product){
    $productRef = $product->getProductRef();   
    if (isset($this->products[$productRef])){
        unset($this->products[$productRef]);               
    }    
  }
  
  //Update product
  public function updateProduct(Product $product,$quantity){
    $productRef = $product->getProductRef();
    if (($quantity > 0) && ($quantity != $this->products[$productRef]['quantity'])) {
        $this->products[$productRef]['quantity'] = $quantity;
    }
    else {
        $this->removeProduct($product);
    }
  }


  //Calculate total 
  public function calculateTotal(Product $product){
    $productRef = $product->getProductRef();

        
      foreach($this->products as $product){ 

          
          if (array_key_exists('quantity',$product)) {
            if (array_key_exists('item',$product)) {
                //$productRef = $product[$productRef];                     
                $quantity = $product['quantity'];
                var_Dump($quantity);
            
                $price = $product['item']->getPrice();

                var_Dump($price);
                //if (isset($this->total['total'])) {


                 //foreach($this->total as $value){
                  //   if (in_array($productRef,$value)) {
                 //$this->total[$productRef]['total'][] = $price * $quantity;
                    
                   
                    // if(array_key_exists('total',$value)) {    
                    //$this->total['total'][$productRef] = $price * $quantity;
                    //$this->total['total'][$productRef][] = $price * $quantity;
                       //if ($key){{
                         //if (!isset($this->total[$productRef]['total'])){
                              //if (!array_key_exists([$productRef] ['total'], $this->total)){
                             
                                  //$this->total[$productRef]['total'][] = $price * $quantity;
                                  $this->total['total'][$productRef][] = $price * $quantity;
                              
                              //}
                             //var_Dump( $this->total[$productRef]['total']);
                              //}
                       
                        
                         
                      //  $key = array_search('total',$this->total);
                
                    

                    //}
                  
                 //}
                  // }
                  
                //}
                
              // $this->total['total'][] = $price * $quantity;
                     
            }       
            
          }

  
        
      
      } 
  
                                  
  

   
    


  }
     
  //Calculate total 
 /* public function calculateTotal(Product $product){
    $productRef = $product->getProductRef();       
    foreach($this->products as $product){  
         
      if (array_key_exists('quantity',$product)) {
        if (array_key_exists('item',$product)) {
            //$productRef = $product[$productRef];                     
            $quantity = $product['quantity'];
            var_Dump($quantity);
        
            $price = $product['item']->getPrice();

            var_Dump($price);
            //if (isset($this->total['total'])) {


              // foreach($this->total as $value){
              //   if (in_array($productRef,$value)) {
                
                
                  //$this->total['total'][$productRef] = $price * $quantity;
             //$this->total['total'][$productRef][] = $price * $quantity;
             $this->total[$productRef]['total'][] = $price * $quantity;
            
              //   }
              // }
               
            //}
             
           // $this->total['total'][] = $price * $quantity;
          
                               
        }       
        
      }
     
    } 



  }*/


  


   //Calculate SubTotal  
  /*public  function calculateSubTotal(Product $product,$voucher){

    foreach($this->products as $product){  
           
      if (array_key_exists('quantity',$product)) {
        if (array_key_exists('item',$product)) {                  
            $quantity = $product['quantity'];    
            $price = $product['item']->getPrice();
            //$productRef = $product[$productRef];  
           
          
        }   
               
        
      }
    }
    $this->subTotal += ($price * $quantity)* ((100-$voucher)/100);
       
  }*/

  
}

?>